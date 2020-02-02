<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Efile;
use App\Company;
use Validator,Redirect,Response,File;

use Intervention\Image\Exception\NotReadableException;
use Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use Illuminate\Support\Facades\Auth;


class FileController extends Controller
{
    

    private $document_ext = ['doc', 'docx','zip'];
    private $pdf_ext = ['pdf'];
    private $excel_ext = ['xls','xlsx'];

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Get type by extension
     * @param  string $ext Specific extension
     * @return string      Type
     */
    private function getType($ext)
    {
        if (in_array($ext, $this->pdf_ext)) {
            return 'pdf';
        }

        if (in_array($ext, $this->excel_ext)) {
            return 'excel';
        }

        // if (in_array($ext, $this->video_ext)) {
        //     return 'video';
        // }

        if (in_array($ext, $this->document_ext)) {
            return 'doc';
        }
    }

    /**
     * Get all extensions
     * @return array Extensions of all file types
     */
    private function allExtensions()
    {
        return array_merge($this->pdf_ext, $this->excel_ext, $this->document_ext);
    }

    /**
     * Get directory for the specific user
     * @return string Specific user directory
     */
    private function getUserDir()
    {
        return Auth::user()->name . '_' . Auth::id();
    }



    public function index()
    {
    	$user = Auth::user();
    	// dd($user);

    	if($user->type == 'client')
    	 {
    	    $files = Efile::where('user_id', Auth::id())
                            ->orderBy('created_at', 'desc')->paginate(20);
             if($files->count() > 0)
             {

             	    return view('files.file_upload');
             }

             else
             {
             	 return view('files.files');
             }
    	 }


    	 else
    	 {
    	 	$files = Efile::orderBy('created_at', 'desc')->paginate(20);
    	 	  if($files->count() > 0)
             {

             	    return view('files.file_upload');
             }

             else
             {
             	 return view('files.files');
             }

    	 }
    }



    public function store(Request $request)
    {

    	 // $request->validate([
      //       'file' => 'required|mimes:doc,pdf,xlx,csv|max:2048',
      //       'name' => 'required'
      //   ]);

    	 request()->validate([
         'file'  => 'required|mimes:doc,docx,pdf,txt|max:2048',
       ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        //     }
  
      
        	// Get filename with extension            
        	$filenameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);            
           // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;  
             //Filename to store
            $dbfileNameToStore = '/files'.$fileNameToStore;    

            $file = $request->file('file');
            $ext = $request->file('file')->getClientOriginalExtension();
            $type = $this->getType($ext);
            $size = $this->filesize_formatted($file);
            $path = $request->file('file')->storeAs('files/'.$type, $fileNameToStore, 'public');

                $efile = new Efile();
                $efile->name = $request->name;
                $efile->type = $type;
                $efile->storage = $fileNameToStore;
                $efile->source = 'upload';
                $efile->path = $path;
                $efile->status = 'active';
                $efile->size = $size;
                $efile->user_id = Auth::id();
                $efile->save();


               

               toast('File Uploaded','success');
   
        return back()
            ->with('success','You have successfully upload file.');
       
    }


    public function delete(Request $request)
    {
        $id =$request->category_id;

         $document = Efile::where('id',$id)->first();
        //delete the file from the server

        // Storage::delete($document->path);
        $storagePath  = Storage::disk('public')->getDriver()->getAdapter()->getPathPrefix();
        if(file_exists($storagePath.$document->path)){
         unlink($storagePath.$document->path);
        }
        
        $document->delete($id);

               toast('File Uploaded','success');
   
        return back()
            ->with('success','You have successfully upload file.');

    }



        /**
         * Formats filesize in human readable way.
         *
         * @param file $file
         * @return string Formatted Filesize, e.g. "113.24 MB".
         */
        private function filesize_formatted($file)
        {
            $bytes = filesize($file);

            if ($bytes >= 1073741824) {
                return number_format($bytes / 1073741824, 2) . ' GB';
            } elseif ($bytes >= 1048576) {
                return number_format($bytes / 1048576, 2) . ' MB';
            } elseif ($bytes >= 1024) {
                return number_format($bytes / 1024, 2) . ' KB';
            } elseif ($bytes > 1) {
                return $bytes . ' bytes';
            } elseif ($bytes == 1) {
                return '1 byte';
            } else {
                return '0 bytes';
            }
        }





}

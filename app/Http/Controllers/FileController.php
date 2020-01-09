<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Efile;
use App\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    

    private $document_ext = ['doc', 'docx'];
    private $pdf_ext = ['pdf'];
    private $excel_ext = ['xls','xlsx'];


    public function index()
    {
    	$user = Auth::user();
    	// dd($user);

    	if($user->type == 'client')
    	 {
    	    $efiles = Efile::where('user_id', Auth::id())
                            ->orderBy('created_at', 'desc')->paginate(20);
             if($efiles->count() > 0)
             {

             	    return view('files.file_upload', compact('user', 'efiles'));
             }

             else
             {
             	 return view('files.files');
             }
    	 }


    	 else
    	 {
    	 	$efiles = Efile::orderBy('created_at', 'desc')->paginate(20);
    	 	  if($efiles->count() > 0)
             {

             	    return view('files.file_upload', compact('user', 'efiles'));
             }

             else
             {
             	 return view('files.files');
             }

    	 }
    }



    public function store(Request $request)
    {
    	$user = Auth::user();

    	 $max_size = (int)ini_get('upload_max_filesize') * 1000;
        $all_ext = implode(',', $this->allExtensions());

        $this->validate($request, [
            'name' => 'required|unique:files',
            'file' => 'required|file|mimes:' . $all_ext . '|max:' . $max_size
        ]);

         $model = new Efile();

        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $type = $this->getType($ext);
        $path = '/public/' . $this->getUserDir() . '/' . $type . '/' . $request['name'] . '.' . $ext;
        $size = $file->getSize();
        $filename = time().'-'.$request->name;


        if (Storage::putFileAs('/public/' . $this->getUserDir() . '/' . $type . '/', $file, $filename . '.' . $ext))
         {
           $model::create([
		        'name' => $request->name,
		        'type' => $type,
		        // 'extension' => $ext,
		        'source' => 'upload',
		        'path' => $path,
		        'size' => $size,
		        'user_id' => $user->id,
		    ]);

           toast('File Uploaded','success');
			    		  return redirect()->back();

           // return back()->with('success','')
        }
    }




}

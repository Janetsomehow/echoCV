<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Efile;
use Validator,Redirect,Response,File;
use Intervention\Image\Exception\NotReadableException;
use Storage;

class Document extends Component
{

	public $search = '';
	// public $files = [];


	public function delete($id)
	{

		 $document = Efile::where('id',$id)->first();
        //delete the file from the server

        // Storage::delete($document->path);
        $storagePath  = Storage::disk('public')->getDriver()->getAdapter()->getPathPrefix();
		if(file_exists($storagePath.$document->path)){
		 unlink($storagePath.$document->path);
		}
		
        $document->delete($id);

	}



    public function render()

    {


    	if(Auth::user()->permission == 'edit')
    	 {

    	 	$this->files = Efile::where('user_id', Auth::id())
                            ->orderBy('created_at', 'desc')->where('name', 'like', '%' . $this->search . '%')
            ->paginate(20);
    	 }

    	if(Auth::user()->permission == 'admin'){

    		$this->files = Efile::orderBy('created_at', 'desc')->orWhere('name', 'like', '%' . $this->search . '%')
            ->paginate(20);

    	 }


        return view('livewire.document',[

        	'files' => $this->files,

        ]);
    }
}

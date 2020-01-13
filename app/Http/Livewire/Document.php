<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Efile;

class Document extends Component
{

	public $search = '';
	// public $files = [];



    public function render()

    {


    	if(Auth::user()->type == 'client')
    	 {

    	 	$this->files = Efile::where('user_id', Auth::id())
                            ->orderBy('created_at', 'desc')->where('name', 'like', '%' . $this->search . '%')
            ->paginate(20);
    	 }

    	if(Auth::user()->type == 'echovc'){

    		$this->files = Efile::orderBy('created_at', 'desc')->orWhere('name', 'like', '%' . $this->search . '%')
            ->paginate(20);

    	 }


        return view('livewire.document',[

        	'files' => $this->files,

        ]);
    }
}

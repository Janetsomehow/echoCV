<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Avatar;
use Storage;
use App\Company;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = new User([
		        'fname' => $request->fname,
		        'lname'=> $request->lname,
		        'email'=> $request->lname,
		        'type'=>'client', 
		        'permission'  => 'admin',
		        'password' => Hash::make($request->password),
                ]);
        
        		auth()->login($user);

        $loguser = Auth::user();

        $company = Company::where('user_id', $loguser->id)->first();

        		if($loguser->type == 'client' && !is_null($company))
        		{
        			return redirect()->to($company->uuid.'/home');
        		}

        		if($loguser->type == 'client' && is_null($company))
        		{
        			return redirect()->to('/add_company');
        		}


        		if($loguser->type == 'echovc' )
        		{
        			return redirect()->to('/home');
        		}
        
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function profileindex()
    {
    	   if (Auth::check())
			    {
			    	 return view('account_settings.profile')->with('user',Auth::user());
			        // return View::make('profile')->with('user',Auth::user());
			    }
			    else
			    {
			        return Redirect::to('login')->with('login_error','You must login first.');
			    }
    }

    public function profileupdate(Request $request)
    {

    	$user = User::where('id',Auth::id())->first();
    	$user->fname = $request->fname;

    }
}

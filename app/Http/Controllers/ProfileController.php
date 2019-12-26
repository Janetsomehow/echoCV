<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Storage;

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

    public function ajaximage(Request $request)
    {
    	$validator = Validator::make($request->all(),
                [
                    'file' => 'image',
                ],
                [
                    'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
                ]);
            if ($validator->fails())
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );

           
            $extension = $request->file('file')->getClientOriginalExtension();
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $file = $request->file('file');


            $user = User::where('id',Auth::id())->first();

            $old_filename = '/public/avatars/' . $user->id . '/' . $user->avatar;
            $new_filename = '/public/avatars/' .  $user->id  . '/' . $filename;
            // Storage::putFileAs('/public/avatars/' . $user->id . '/', $file,  $filename);

            if (Storage::disk('local')->exists($old_filename)) 
            {
            	Storage::disk('local')->delete($old_filename);
            	if(Storage::putFileAs('/public/avatars/' . $user->id . '/', $file,  $filename))
            	{
                 $user->avatar = $filename;
                 $user->save();
                 return $filename;
                }
            
            }
           
    }


}

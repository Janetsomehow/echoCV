<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // ********Access control for Reports********
    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function index()
    {
        // Return a view here
        Users::paginate(5);
        return view('string');
        
    }



    Public function create()
    {
        // Return a view here
    }

    Public function invite()
    {
        // Return a view here
    }
}



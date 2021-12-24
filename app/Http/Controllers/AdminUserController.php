<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{


    //for user 
    // public function __construct()
    // {
    //     $this->middleware('role: administrator');
    // }

    // //for admin
    // public function __construct()
    // {
    //     $this->middleware('role: user');

    // }

    // //for both permissions 
    // public function __construct()
    // {
    //     $this->middleware('role: user|administrator');

    // }


    function userindex()
    {
        return view('separateDashboard.user.index');
    }

    function adminindex()
    {
        return view('separateDashboard.admin.index');
    }
}

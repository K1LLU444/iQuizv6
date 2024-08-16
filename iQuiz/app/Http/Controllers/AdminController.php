<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard'); 
    }

    public function users()
    {
        return view('admin.users'); 
    }

    public function settings()
    {
        return view('admin.settings'); 
    }

    public function allCategory()
    {
        return view('admin.all-category');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view('blogs');
    }

    public function adminIndex(){
        return view('admin.blog');
    }
}

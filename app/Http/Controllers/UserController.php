<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return view('/welcome');
    }

     public function blog()
    {
    	return view('/blog');
    }

    public function basic_profile()
    {
    	return view('/basic_profile');
    }

    public function key_man()
    {
        return view('/key_man');
    }
}

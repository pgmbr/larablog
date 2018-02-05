<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
	    return view('home');
    }

	public function getLogin() {
		return view('login');
	}

	public function getRegister() {
		return view('register');
	}

}

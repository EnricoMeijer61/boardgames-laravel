<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Dit is de index pagina';
        return view ('pages.index')->with('title', $title);
    }
    public function login(){
        $title = 'Dit is de index pagina';
        return view ('auth.login')->with('title', $title);
    }
    public function register(){
        $title = 'Dit is de index pagina';
        return view ('auth.register')->with('title', $title);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Dit is de index pagina';
        //return view ('pages.index', compact('title'));
        return view ('welcome')->with('title', $title);
    }
}

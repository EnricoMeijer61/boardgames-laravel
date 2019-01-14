<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use phpDocumentor\Reflection\Types\Array_;

class PagesController extends Controller
{
    public function index(){
        $title = 'Dit is de index pagina';
        //return view ('pages.index', compact('title'));
        return view ('pages.index', compact('messages'))->with('title', $title);
    }
    public function result(){
        $title = 'Resultaten game invoeren';
        return view('pages.results')->with('title', $title);
    }
}

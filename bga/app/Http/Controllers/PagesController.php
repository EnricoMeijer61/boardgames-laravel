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
    public function about(){
        $title = 'Dit is de about page';
        return view('pages.about')->with('title', $title);
    }
    public function service(){
        $data = array(
            'title' => 'Games informatie',
            'games' => ['game1', 'game2', 'game3']
        );
        return view('pages.service')->with($data);
    }
    public function result(){
        $title = 'Resultaten game invoeren';
        return view('pages.results')->with('title', $title);
    }
    public function message(){
        $title = 'Dit is de berichten pagina';
        return view ('message.index')->with('title', $title);
    }
    public function admin(){
        return view ('admin.index');
    }
    public function algemenevoorwaarden(){

        return view('pages.algemenevoorwaarden');
    }
    public function rules(){

        return view('pages.rules');
    }
}

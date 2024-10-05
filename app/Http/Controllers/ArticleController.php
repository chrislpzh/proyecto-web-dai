<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /** 
     * Create a new controller instance.
     * 
     * @return void
    */
    public function _construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return '<h1>Hola Mundo!</h1>';
    }

}

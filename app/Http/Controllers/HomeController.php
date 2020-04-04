<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Commande;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', [ 'except' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $arr['articles'] = Article::all();
        return view('home')->with($arr);
    }
}

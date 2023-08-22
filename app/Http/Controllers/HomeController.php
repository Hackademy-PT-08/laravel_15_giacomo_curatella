<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Total;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::all();
        $totals = Total::all();
        return view('home.index', ['articles'=>$articles, 'totals'=>$totals]);
    }
}

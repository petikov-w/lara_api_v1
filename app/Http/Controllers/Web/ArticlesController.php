<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ArticlesController extends Controller
{
    public function index() {
        $arrayArticles=Config::get('myconst.articles');
        return view('pages.articles')->with('articles',$arrayArticles);
    }
}

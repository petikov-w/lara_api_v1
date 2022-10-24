<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ArticleController extends Controller
{
    public function show($article) {
        $arrayArticles=Config::get('myconst.articles');
        $article=$arrayArticles[$article-1];
        ddd($arrayArticles[$article-1]);
        if (is_null($article)) {
            return abort(404);
        }
      return view('pages.article')->with('articles',$article);
    }
}

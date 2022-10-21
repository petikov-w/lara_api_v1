<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\MiniArticleResource;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    public function list(){

        if (Cache::has("posts")) {
            $posts = Cache::get("posts");
        } else {
            $posts = response(MiniArticleResource::collection(Post::query()->get()));
            Cache::put("posts", $posts);
        }
        return $posts
            ->header('Content-Type','application/json; charset=UTF-8');

    }


    public function show(Post $article){
        return response($article)
            ->header('Content-Type','application/json; charset=UTF-8');
    }
}

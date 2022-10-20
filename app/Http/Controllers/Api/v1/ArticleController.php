<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\MiniArticleResource;
use App\Models\Post;

class ArticleController extends Controller
{
    public function list(){
          $contents = Post::query()->get();
//        $contents = Post::query()
//            ->select(['id','title'])
//            ->get();
//        $contents = Post::all();
//        $data=[];
//        foreach ($contents as $content) {
//            $data[] = [
//                'id'=>$content->id,
//                'title'=>$content->title,
//                'image'=>$content->image
//            ];
//        }
//        return response($data)
//               ->header('Content-Type','application/json; charset=UTF-8');
        return response(MiniArticleResource::collection($contents))
            ->header('Content-Type','application/json; charset=UTF-8');

//        return response($contents)
//            ->header('Content-Type','application/json; charset=UTF-8');
    }


    public function show(Post $article){
        return response($article)
            ->header('Content-Type','application/json; charset=UTF-8');
    }
}

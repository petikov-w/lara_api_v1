<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function list(){
        $result= 'Здравтвуйте дорогие товарищи!!!';
        echo $result;
    }
}

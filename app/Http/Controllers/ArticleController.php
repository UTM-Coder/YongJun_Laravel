<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(Request $request)
    {
        $articles = [
            '0' => 'First Article',
            '1' => 'Second Article'
        ];
        $article_id = $request->get('article');
        $article = $articles[$article_id];
        return $article;
    }

    public function get(Request $request, $id)
    {
        return [$id, $request->all()];
    }
}

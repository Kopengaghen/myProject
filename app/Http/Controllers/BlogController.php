<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Blog\Article;

class BlogController extends Controller
{
    // public function __construct()
    // {
    //     $articles = [
    //         [
    //             'id' => 1,
    //             'name' => 'Dummy name',
    //         ],

    //         [
    //             'id' => 2,
    //             'name' => 'Dummy name2',
    //         ],

    //         [
    //             'id' => 3,
    //             'name' => 'Dummy name3',
    //         ],

    //         [
    //             'id' => 4,
    //             'name' => 'Dummy name4',
    //         ],

    //         [
    //             'id' => 5,
    //             'name' => 'Dummy name5',
    //         ],
    //     ];
    // }

    public function __construct()
    {
        $articles = [
            [
                'id' => 1,
                'name' => 'DO YOU LIKE TO COLOUR CODE!?',
            ],

            [
                'id' => 2,
                'name' => '5 BENEFITS OF ATTENDING A CONFERENCE',
            ],

            [
                'id' => 3,
                'name' => 'THE EARLYBIRD CATCHES THE WORM BUT...',
            ],

            [
                'id' => 4,
                'name' => 'THE POWER OF BRANDING',
            ],

            [
                'id' => 5,
                'name' => 'GREEN IS THE NEW BLACK',
            ],
        ];        
    }

        public function index()
        {
            $articles = Article::orderBy('published_at', 'desc')->paginate(6);

            return view('pages/blog-list', ['articles' => $articles]);
        }

    public function show(int $articleId)
    {
        // $article = null;
        // foreach ($articles as $articleItem) {
        //     if($articleItem['id'] === $articleId) {
        //         $article = $articleItem;
        // }
        $article = Article::findOrFail($articleId);
    

        // if(!$article) {
        //     abort(404);
        // }

        return view('pages/blog-article', ['article' => $article]);
    }
}





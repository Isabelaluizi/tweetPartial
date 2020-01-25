<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Int_;

class TweetController extends Controller
{
    private $tweets = [
        [
            'author' => 'Isabela',
            'content' => 'This is my first tweet'
        ],
        [
            'author' => 'Isabela',
            'content' => 'This is my second tweet'
        ],
        [
            'author' => 'Isabela',
            'content' => 'This is my third tweet'
        ],
        [
            'author' => 'Santa',
            'content' => 'This is Santa first tweet'
        ],
        [
            'author' => 'Santa',
            'content' => 'This is Santa second tweet'
        ]
        ];

    function show() {
            return view('showTweets',['allTweets'=> $this->tweets]);
    }

    function showTweet($id) {
        if($id > sizeOf($this->tweets) || !is_numeric($id)) {
            return view("tweetError");
        } else {
        return view("showTweets",["allTweets"=> [$this->tweets[$id]]]);
        }


    }
}

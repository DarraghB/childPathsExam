<?php namespace App\Http\Controllers;

use Log;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Posts;


class PostsController extends Controller
{
    /**
     * Show the subscription form
     *
     * @return Response
     */
    public function index(Posts $posts)
    {
        $posts = $posts::All();
        $data = [
            'posts' => $posts
        ];


        return view('posts.index')->with($data);
       
    }

}

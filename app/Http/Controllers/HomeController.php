<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
  /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('home', compact('posts'));
    }

    public function getPost($id){
        if($id != ''){
            $post = Post::find($id);
        }
        return Redirect::back();
    }
}

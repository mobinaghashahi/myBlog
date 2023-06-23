<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function showHome(){
        //this is for fix groupBy error!!!!!
        \DB::statement("SET SQL_MODE=''");
        return view('home',['posts'=>Comment::join('post', 'post.id', '=', 'comment.post_id')
            ->select('post.id', 'post.title','post.imageName','post.description', \DB::raw('COUNT(comment.id) as comment_count'))
            ->groupBy('post.id')
            ->get()]);
    }
    public function read($id){
        return view('read',['post'=>Post::findOrFail($id)]);
    }
}

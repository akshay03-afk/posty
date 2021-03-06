<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(User $user){
        // dd($user);
        $post = $user->posts()->with(['user', 'likes'])->paginate(10);
        return view("users.posts.index",[
            "user" => $user,
            "posts"=> $post
        ]);
    }
}

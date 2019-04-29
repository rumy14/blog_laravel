<?php
namespace App\Http\Controllers;

use App\Post;

class AjaxController extends Controller
{
    public function likePost(Request $request) {
        $likePost = new Post();
        $likePost->likepost = 1;
        $likePost->save();
    }
}

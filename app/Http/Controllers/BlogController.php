<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
class BlogController extends Controller
{
	public function getIndex() {
		$posts = Post::paginate(4);
        $categories = Category::all()->sortBy("name");
		return view('blog.index')->withPosts($posts)->withCategories($categories);
	}
    public function getCategory($id) {
        $posts = Post::where('category_id', $id)->paginate(4);
        $categories = Category::all()->sortBy("name");
        return view('blog.index')->withPosts($posts)->withCategories($categories);
    }
    public function getSingle($slug) {
    	// fetch from the DB based on slug
    	$post = Post::where('slug', '=', $slug)->firstOrFail();
        //var_dump(Post::where('slug', '=', $slug)->firstOrFail());
    	// return the view and pass in the post object
    	return view('blog.single')->withPost($post);
    }
}

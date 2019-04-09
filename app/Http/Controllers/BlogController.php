<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
class BlogController extends Controller
{
	public function getIndex() {
		$posts = Post::paginate(3);
        $popPosts = Post::orderBy('view_count', 'DESC')->limit(4)->get();
        $categories = Category::all()->sortBy("name");
		return view('blog.index')->withPosts($posts)->with('popPosts', $popPosts)->withCategories($categories);
	}
    public function getCategory($id) {
        $posts = Post::where('category_id', $id)->paginate(3);
        $categories  = Category::all()->sortBy("name");
        $popPosts = Post::orderBy('view_count', 'DESC')->limit(4)->get();
        return view('blog.index')->withPosts($posts)->with('popPosts', $popPosts)->withCategories($categories);
    }
    public function getSingle($slug) {
    	$post = Post::where('slug', '=', $slug)->firstOrFail();
        $count = $post->view_count;
        $post->view_count = ++$count;
        $post->save();
    	return view('blog.single')->withPost($post);
    }
}

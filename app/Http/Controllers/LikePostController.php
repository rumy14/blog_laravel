<?php


namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Likepost;
use DB;
class LikePostController extends Controller
{
    /**
     * @param Request $request
     * @param $post_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function like(Request $request, $post_id) {
        $likepost = new Likepost();
        $posts = Likepost::where('post_id', $post_id)->where('user_id', Auth::id())->get();
        if($posts->isEmpty()){
            $likepost->likeposts = 1;
            $likepost->user_id = Auth::id();
            $likepost->post_id = $post_id;
            $likepost->save();
        }else{
            if($posts[0]['likeposts'] == 0){

                DB::table('likepost')
                    ->where('id', $posts[0]['id'])
                    ->update(['likeposts' => 1,
                        'user_id' => Auth::id(),
                        'post_id' => $post_id,
                        ]);
            }
            if($posts[0]['likeposts'] == 1){
                DB::table('likepost')
                    ->where('id', $posts[0]['id'])
                    ->update(['likeposts' => 0,
                        'user_id' => Auth::id(),
                        'post_id' => $post_id,
                    ]);
            }
        }
        $post = Post::find($post_id);
        return redirect()->route('blog.single', [$post->slug]);
    }
}
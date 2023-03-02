<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\creator;
use Illuminate\Support\Facades\Auth;
class post_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
    }
    public function getPosts()
    {

        $posts=post::with('creator')->simplePaginate();
        return view('posts',['posts'=>$posts]);
    }

    public function getPostsInfo($id)
    {

        $posts=post::where('id',$id)->get();
        return view('view',compact('posts'));
    }


    function destroy($id)
    {

        // $post=post::find($id);
        // //dd($post);
        // $post->delete();
        post::where('id',$id)->delete();
        return redirect()->route('get_posts');
    }
    function update($id)
    {
        $post = post::find($id);
        return view('update', compact('post'));
    }
    function edit($id, Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'creator_id' => 'required',

        ]);
        $post = post::where('id',$id)->update($request->except(['_method', '_token']));

        return redirect()->route('get_posts');
    }

    function create()
    {
        return view('create');
    }
    function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'creator_id' => 'required',

        ]);


        post::create(['title'=>$request->title,'description'=>$request->description,'creator_id'=>Auth::user()->id]);
        return redirect()->route('get_posts');
    }

    function show_users(){
        $creators=creator::get();
        return view('users',compact('creators'));
    }

    function show_user_info($id){
        $user=creator::find($id);
       // $user=$user[0];
        //    $post=post::where('creator_id',$id)->get();
        //    dd($user);
        return view('user_info',compact('user'));
    }
}

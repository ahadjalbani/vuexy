<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);


        return view('pages.backend.post.index',compact('posts'));
    }

    public function create ()

    {

        return view ('pages.backend.post.create');
    }

    public function store(Request $request)

    {

        $request->validate([
            'name' => 'required',
            'detail' => 'required',


        ]);


        Post::create([
            'name'=>$request->name,
            'detail'=>$request->detail,
         ]);

         return redirect()->route('post.index')
                        ->with('success','user created successfully.');
    }

    public function edit(Post $post)
    {
        return view('pages.backend.post.update',compact('post'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'detail' => 'required',


        ]);

        Post::where('id',$id)->update([
            'name'=>$request->name,
            'detail'=>$request->detail,
        ]);

        return redirect()->route('post.index')
        ->with('success','post updated successfully');


    }

    public function destroy($id)
{

    Post::where('id',$id)->delete();
    return back()->with('success','user has been deleted successfully!');

}





}

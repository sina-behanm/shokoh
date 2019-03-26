<?php

namespace App\Http\Controllers;

use App\Comment;

use App\Courses;
use App\Post;
use App\Student;
use App\Tags;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Bottom;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function getPost($id)
    {
        $post = Post::find($id);
        $comments = Post::find($id)->comment()->get();
        return view('blog.course_detail',['post' => $post,'comments' => $comments]);
    }

    public function getBlogIndex()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('blog.blog', ['posts' => $posts]);
    }



    public function getIndexPostOfBlog()
    {
        $posts = Post::all();
        $bottoms = Bottom::all();
        return view('blog.index',['posts'=> $posts,'bottoms' => $bottoms]);
    }

    public function getSidePost()
    {
        $posts =Post::all();
        return view('blog.courses',['posts' => $posts]);
    }

    public function postCommentPost(Request $request)
    {
        $comments = new Comment([
            'email'=>$request->input('email'),
            'comment_content'=>$request->input('content'),
            'comment_name'=>$request->input('name')
        ]);
        $post= Post::find($request->get('post_id'));
        $post->comment()->save($comments);
        return redirect()->back();
    }



    public function getAdminIndex()
    {
        $posts = Post::all();
        return view('admin.index', ['posts' => $posts]);
    }


    public function getAdminCreate()
    {
        $tags = Tags::all();
        return view('admin.create',['tags'=>$tags]);
    }


    public function getAdminEdit($id)
    {
        $user = Auth::user();
        $post =Post::find($id);
        if ($user->can('update',$post))
        {
            $tags =Tags::all();
            return view('admin.edit',['post' => $post,'postId' => $id,'tags' => $tags]);
        } else
        {
            return redirect()->back()->with('error','You are not able to edit this post !!!!');
        }
    }


    public function postAdminCreate(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'image' => 'mimes:jpeg,bmp,png'
        ]);
        /*
         * auth user
         */
        $user = Auth::user();
        $imagename= $request->file('image')->getClientOriginalName();
        Input::file('image')->move('images/postimages', $imagename);
        $post = new Post([
            'title' => $request->input('title'),
            'body'=> $request->input('body'),
            'content' => $request->input('content')
        ]);
        $post->image_name = $imagename;
        $user->Post()->save($post);
        $post->tags()->attach($request->input('tags'));
        return redirect()->route('admin.index')->with('info','Post Created,Title is:'.$request->input('title'));
    }


    public function postAdminEdit(Request $request)
    {
        $this->validate($request,[
           'title'=> 'required',
            'body'=> 'required',
            'image' => 'mimes:jpeg,bmp,png'
        ]);
        $post =Post::find($request->input('id'));
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->content = $request->input('content');
        $post->image_name = $request->file('image')->getClientOriginalName();
        Input::file('image')->move('images/postimages',$request->file('image')->getClientOriginalName());
        $post->save();
        $post->tags()->sync($request->input('tags'));
        return redirect()->route('admin.index')->with('info','Post edited,New Title is :'.$request->input('title'));
    }


    public function getAdminDelete($id)
    {
        $user = Auth::user();
        $post = Post::find($id);
        if ($user->can('delete',$post))
        {
            $file_path = public_path("images/postimages/{$post->image_name}");
            unlink($file_path);
            $post->comment()->delete();
            $post->tags()->detach();
            $post->delete();
            return redirect()->route('admin.index')->with('info','Post Deleted');
        } else {
            return redirect()->back()->with('error','You are not able to delete this post !!!!');
        }


    }

}

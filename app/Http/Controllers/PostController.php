<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //
    public function addPost()
    {
    	return view('addpost');
    }

    public function createPost(Request $request)
    {

    	$post = new Post();
    	$post->titre = $request->titre;
    	$post->contenu = $request->contenu;
    	$post->save();

    	return \back()->with('post_created','Post Ajouté Avec Success');


    }

    public function getPosts()
    {
    	$posts = Post::orderBy('id','DESC')->get();
    	return view('posts',compact('posts'));
    }

    public function getPostById($id)
    {
    	$post = Post::where('id',$id)->first();
    	return view('detail-post',compact('post'));

    }

    public function deletePost($id)
    {
    	Post::where('id',$id)->delete();
    	return \back()->with('post_deleted','Post Supprimé Avec Success');


    }

    public function editPost($id)
    {
    	$post = Post::find($id);
    	return view('editPost',compact('post'));
    }

    public function updatePost(Request $request,$id)
    {

    	$post = Post::find($id);
    	$post->titre = $request->titre;
    	$post->contenu = $request->contenu;
    	$post->save();

    	return \back()->with('post_updated','Post Modifier Avec Success');


    }

}

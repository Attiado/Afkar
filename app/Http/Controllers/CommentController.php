<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::latest()->get();

        return view('comments.index',compact('comments'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create',compact('comment'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'contenu'=>'required',
            'user'=>'required'
        ]);
        
        Comment::create($data);

        return redirect()->route('comments.index')->with('success', 'Commentaire ajouté !');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view('comments.show',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'contenu'=>'required',
            'user'=>'required'
        ]);
            $comment->contenu=$request->contenu;
            $comment->user=$request->user;
            $comment->save();
            return redirect()->route('comments.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    
    public function commenter(Comment $comment)
    { // avoir les commentaires de la bdd
        $comments = Comment::latest()->get();

        return view('comments.commenter',compact('comments'));
    }

     public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}

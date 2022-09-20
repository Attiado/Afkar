<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $users = User::latest()->get();

        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        
        return view('users.create',compact('user'));
    }

    /*
      Store a newly created resource in storage.
     
      @param  \Illuminate\Http\Request  $request
      @return \Illuminate\Http\Response */
     
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required'
        ]);
        
        User::create($data);

        return redirect()->route('users.index')->with('success', 'User has been added!');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required'
        ]);
            $user->name=$request->name;
            $user->contenu=$request->email;
            $user->password=$request->password;
            $user->role=$request->role;
           
            $user->save();
            return redirect()->route('users.index');
    
            
    } 
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}

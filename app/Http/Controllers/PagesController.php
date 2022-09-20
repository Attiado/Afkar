<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class PagesController extends Controller
{
    
    public function team()
    {
        return view('layouts.team');
    }
    public function sujets()
    {
        return view('layouts.sujets');
    }

    public function postuler()
    {
        return view('layouts.postuler');
    }
    public function questionsrep()
    {
        // afficher la liste des questions apartir du bdd
        $questions = Question::latest()->get();

        return view('layouts.questionsrep',compact('questions'));
    }
    
    public function contact()
    {
        return view('layouts.contact');
}
public function profile()
{
    return view('dashboard.profile');
}

}
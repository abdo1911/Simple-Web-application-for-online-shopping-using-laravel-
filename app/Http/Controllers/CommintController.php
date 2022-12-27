<?php

namespace App\Http\Controllers;

use App\Models\Commint;
use Illuminate\Http\Request;

class CommintController extends Controller
{

    public function store()
    {
        return view('/showcomment');
    }

    public function handleSubmit()
    {
        $data = request()->input();
        $comment = Commint::create($data);
        $comment->save();
        return redirect()->route('showComment');
    }
    public function showComment()
    {
        $results = Commint::orderBy('created_at','desc')->paginate(7);
        return view('review', compact('results'));
    }
}

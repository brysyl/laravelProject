<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrytController extends Controller
{
    //
    public Function store (Request $request){

        $post = newPost ([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        $post -> save();
        return redirect () -> back();
    }
}

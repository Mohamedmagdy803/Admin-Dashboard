<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Model\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function store(QuestionRequest $request){
        Question::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "type"=>$request->type,
            "message"=>$request->message,
        ]);

        return redirect()->route('contact')->with('success',"Created successfully");
    }
}

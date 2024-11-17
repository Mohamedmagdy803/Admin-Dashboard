<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "name"=>"required|min:5",
            "email"=>"required|email|min:5",
            "type"=>"required",
            "message"=>"required|min:7",
        ];
    }
}

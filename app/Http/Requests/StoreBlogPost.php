<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:5|max:60',
            'decs' => 'required|min:5|max:300',
            'content' => 'required|min:5|max:1500',

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostTagRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post_id' => ['required', 'integer'],
            'tag_id' => ['required', 'integer'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}

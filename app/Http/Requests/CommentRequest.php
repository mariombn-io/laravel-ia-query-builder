<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post_id' => ['required', 'integer'],
            'user_id' => ['nullable', 'integer'],
            'body' => ['required'],
            'likes' => ['required', 'integer'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}

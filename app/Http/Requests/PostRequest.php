<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => ['required', 'integer'],
            'title' => ['required'],
            'body' => ['required'],
            'post_status_enum' => ['required', 'integer'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}

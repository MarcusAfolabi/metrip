<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            "category_id" => ['required','string', 'max:255'],
            "title" => ['required',  'unique:blogs', 'string', 'max:255'],
            "tags" => ['required','string', 'max:100'],
            "image" => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            "content" => ['required'],
            "status" => ['in:draft,published,deleted'],
        ];
    }
}

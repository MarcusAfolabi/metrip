<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
{
     
    public function authorize(): bool
    {
        return true;
    }

     
    public function rules(): array
    {
        return [
            "review" => ['required','string', 'max:200'],
            "role" => ['required','string', 'max:100'],
            "rating_score" => ['required','string']            
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'genre' => 'required',
            'director' => 'nullable',
            'year_produced' => 'required|numeric|min:1900|max:date("Y")',
            'storyline' => 'required|min:100'
        ];
    }
}

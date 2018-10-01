<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:1|max:45',
            'author' => 'required|min:1|max:45',
            'price' => 'required|numeric',
            'pages' => 'required|numeric',
            'publisher' => 'required|min:1|max:45',
            'year' => 'required|numeric',
            'hardcover' => 'required|numeric',
        ];
    }
}

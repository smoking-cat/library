<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->status == 'active';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|max:50',
            'description' => 'string|max:256',
            'pic' => 'mimes:png,jpg',
            'author_id' => 'digit',
            'genre_id' => 'digit',
            'publisher_id' => 'digit',
            'category_id' => 'digit',
            'amount' => 'digit'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBookRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:256',
            'pic' => 'required|mimes:png,jpg',
            'author_id' => 'required|digit',
            'genre_id' => 'required|digit',
            'publisher_id' => 'required|digit',
            'category_id' => 'required|digit',
            'amount' => 'required|digit'
        ];
    }
}

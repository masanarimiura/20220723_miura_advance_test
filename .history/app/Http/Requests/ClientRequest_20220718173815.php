<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email',
            'age' => 'numeric',
            'registered_at' => 'date|nullable',
        ];
    }
}

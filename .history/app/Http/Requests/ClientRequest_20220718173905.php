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
        'full_name' => 'required|max:255',
        'gender' => 'required',
        'email' => 'required|unique:posts|email',
        'postcode' => 'required|max:8',
        'address' => 'required|max:255',
        'building_name' => 'required|max:255',
        'opinion' => 'required|max:120',
        ];
    }
}

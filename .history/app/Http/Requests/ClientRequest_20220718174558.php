<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == '/') {
            return true;
        } else {
            return false;
        }
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

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'role.required' => '役職を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'age.numeric' => '年齢は数値で入力してください',
            'registered_at.date' => '日付の形式で入力してください'
        ];
    }
}

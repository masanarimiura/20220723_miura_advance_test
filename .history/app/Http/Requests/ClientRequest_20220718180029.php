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
        'building_name' => 'max:255',
        'opinion' => 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => '名前を入力してください',
            'full_name.max:255' => '名前が長過ぎます',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.max:8' => '郵便番号はハイフンを含めて8文字以内で入力してください',
            'address.required' => '住所を入力してください',
            'address.max:255' => '建物名が長すぎます',
            'building_name.max:255' => 'が長すぎます',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max:120' => 'ご意見は120文字以内で入力してください',
        ];
    }
}

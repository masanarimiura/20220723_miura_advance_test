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
            'full_name' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:posts|email',
            'postcode' => 'required|max:8',
            'address' => 'required',
            'opinion' => 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => '名前を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.max:8' => '郵便番号はハイフンを含めて8文字以内で入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max:120' => 'ご意見は120文字以内で入力してください',
            


            'age.numeric' => '年齢は数値で入力してください',
            'registered_at.date' => '日付の形式で入力してください'
        ];
    }
}

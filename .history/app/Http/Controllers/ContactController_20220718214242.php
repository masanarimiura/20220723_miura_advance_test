<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ClientRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function input(Request $request)
    {
        $item = [
            'last_name'=>$request->last_name,
            'first_name'=>$request->first_name,
            'gender'=>$request->,
            ''=>$request->,
            ''=>$request->,
            ''=>$request->,
            ''=>$request->,
            ''=>$request->,
        ];
        return view('confirm',$item);
    }

    public function store(ClientRequest $request)
    {
        // 送信ボタンが押されたらデータをデータベースに送信してサンクスページに飛ぶ
        return view('thanks');
    }
    
    public function thanks()
    {
        return view('thanks');
    }


    // public function search(Request $request)
    // {
    //     $item = Contact::find($request->input);
    //     $param = [
    //         'item' => $item,
    //         'input' => $request->input
    //     ];
    //     return view('find', $param);
    // }
}

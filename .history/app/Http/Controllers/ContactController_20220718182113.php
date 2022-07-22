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

    public function input()
    {
        $item = [
            // ここに入力したデータをいれて confirm に渡す
            // 'content' => $content . 'と入力しましたね'
        ];
        return view('confirm',$item);
    }
    public function verror()
    {
        return view('verror');
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

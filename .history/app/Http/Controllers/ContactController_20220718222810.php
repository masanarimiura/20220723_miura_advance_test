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
        $request->flash();
        $data = $request->old('data');
        // dd($data);
        return view("confirm", [
        "form_data" => $data]
        return view('confirm',$request);
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

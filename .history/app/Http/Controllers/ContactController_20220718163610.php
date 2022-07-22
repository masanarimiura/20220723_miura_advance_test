<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function input()
    {
        $item = [
            // ここに入力したデータをいれて confirm に渡す
            // 'content' => $content . 'と入力しましたね'
        ];
        return view('confirm',$item);
    }
    
    public function show()
    {
        // $item で送られてきたデータを表示する
        return view('thanks');
    }

    public function store()
    {
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

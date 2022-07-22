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
        return view('confirm',$request);
    }

    public function retype(Request $request)
    {
        return redirect('/')->withInput();
        // 登録処理
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

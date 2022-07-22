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

    public function input(ClientRequest $request)
    {
        return view('confirm',$request);
    }

    public function retype(Request $request)
    {
        return redirect('/')->withInput();
    }

    public function store(Request $request)
    {
        // 登録処理
        return view('thanks');
    }
    
    public function thanks()
    {
        return view('thanks');
    }

    public function manage()
    {
        $items = Contact::Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
        return view('manage', ['items' => $items]);
    }

    public function search(Request $request)
    {
        $items = Contact::where('full_name','LIKE',"%{$request->full_name}%")
        ->andwhere('gender','LIKE',"%{$request->gender}%")
        ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
        
        return view('manage',  ['items' => $items]);
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

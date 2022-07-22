<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store()
    {
        return view('confirm');
    }
    
    public function show ()
    {
        return view('find', ['input' => '']);
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

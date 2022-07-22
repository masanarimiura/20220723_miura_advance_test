<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index', ['items' => $items]);
    }

    public function store()
    {
        return view('add');
    }

    public function show ()
    {
        return view('find', ['input' => '']);
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

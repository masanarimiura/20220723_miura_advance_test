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
        $items
        return view('confirm',$request);
    }

    public function retype(Request $request)
    {
        return redirect('/')->withInput();
    }

    public function store(Request $request)
    {
        $form = [
            'full_name' => $request->last_name.$request->first_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion,
        ];
        Contact::create($form);
        return redirect('thanks');
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
        if($request->gender == '全て'){
            $items = Contact::where('full_name','LIKE',"%{$request->full_name}%")
            ->where('email','LIKE',"%{$request->email}%")
            ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
            return view('manage',  ['items' => $items]);
        }else{
            $items = Contact::where('full_name','LIKE',"%{$request->full_name}%")
            ->where('gender','LIKE',"%{$request->gender}%")
            ->where('email','LIKE',"%{$request->email}%")
            ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
            return view('manage',  ['items' => $items]);
        }
    }
    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('manage');
    }
}

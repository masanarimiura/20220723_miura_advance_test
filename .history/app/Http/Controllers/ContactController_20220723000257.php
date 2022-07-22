<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function input(Request $request)
    {
        $postcode = mb_convert_kana($request->postcode, "a");
        if(strlen($postcode) == 7){
            $postcode = substr($postcode ,0,3) . "-" . substr($postcode ,3);
            $items = [
                'first_name' =>$request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'email' => $request->email,
                'postcode' => $postcode,
                'address' => $request->address,
                'building_name' => $request->building_name,
                'opinion' => $request->opinion,
            ];
            return view('confirm',$items);
        } elseif (strlen($postcode) == 8){
            $items = [
                'first_name' =>$request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'email' => $request->email,
                'postcode' => $postcode ,
                'address' => $request->address,
                'building_name' => $request->building_name,
                'opinion' => $request->opinion,
            ];
            return view('confirm',$items);
        }
    }

    public function retype(Request $request)
    {
        return redirect('/')->withInput();
    }

    public function store(Request $request)
    {
        $validate_rule = [
            'last_name' => 'required|max:100',
            'first_name' => 'required|max:100',
            'gender' => 'required',
            'email' => 'required|unique:contacts|email',
            'postcode' => 'required|max:8',
            'address' => 'required|max:255',
            'building_name' => 'max:255',
            'opinion' => 'required|max:120',
        ];
        $this->validate($request, $validate_rule);
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
        $full_name = $request->full_name;
        $gender = $request->gender;
        $email = $request->email;
        $from_date = $request->from_date;
        $until_date = $request->until_date;

        if(empty($full_name) && empty($email) && empty($from_date)&& empty($until_date) && $gender == '全て'){
            // 何も入力なしの場合
            return redirect('manage');
        } else if($gender == '全て'){
            // gender 全て の場合
            if(!empty($full_name) && empty($email) && empty($from_date)&& empty($until_date)){
                // full_name だけ入力されている場合
                $items = Contact::where('full_name','LIKE',"%{$full_name}%")
                ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
                return view('manage',  ['items' => $items]);
            } else if(!empty($email) && empty($full_name) && empty($from_date)&& empty($until_date)){
                // email だけ入力されている場合 ？？？？？？？？
                $items = Contact::where('email','LIKE',"%{$email}%")
                ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
                return view('manage',  ['items' => $items]);
            } else if(empty($full_name) && empty($email) && !empty($from_date)&& !empty($until_date)){
                // from_date と until_date のみが入力されている場合
                $items = Contact::whereBetween("created_at", [$from_date, $until_date])
                ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
                return view('manage',  ['items' => $items]);
            } else if(!empty($full_name) && !empty($email) && empty($from_date)&& empty($until_date)){
                // full_name と email が入力されている場合
                $items = Contact::where('full_name','LIKE',"%{$full_name}%")
                    ->where('email','LIKE',"%{$email}%")
                    ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
                    return view('manage',  ['items' => $items]);
            }  else if(!empty($from_date) && empty($until_date)){ 
                // from_dateを入力し忘れた場合で
                if(!empty($full_name) && empty($email)){
                    // full_nameだけ入力した場合
                    $items = Contact::where('full_name','LIKE',"%{$full_name}%")
                    ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
                    return view('manage',  ['items' => $items]);
                } else if (empty($full_name) && !empty($email)){
                    // email だけ入力した場合
                    $items = Contact::where('email','LIKE',"%{$email}%")
                    ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
                    return view('manage',  ['items' => $items]);
                } else if (!empty($full_name) && !empty($email)){
                    // full_name と email を入力した場合
                    $items = Contact::where('full_name','LIKE',"%{$full_name}%")
                    ->where('email','LIKE',"%{$email}%")
                    ->Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
                    return view('manage',  ['items' => $items]);

                }
            } 
        }
    }
    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('manage');
    }
}

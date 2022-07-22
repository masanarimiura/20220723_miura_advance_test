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
        function postno_chk($postno)
{
	/** ステータス初期化 */
	$sts = array("sts"=>false, "err"=>null, "postno"=>null);
 
	/** 数字を半角に変換する */
	$postno = mb_convert_kana($postno, "n");
 
	/** 数字以外を削除する */
	$postno = preg_replace("/[^0-9]/", "", $postno);
 
	if (mb_strlen($postno) != 7)	/* 7桁の数字でない ? */
	{
		/** エラーメッセージセット */
		$sts["err"] = "郵便番号の桁数が正しくありません";
 
		/** 処理破棄 */
		return $sts;
	}
 
	/** 郵便番号のフォーマット変換 */
	$postno_01 = substr($postno, 0, 3);
	$postno_02 = substr($postno, -4, 4);
	$sts["postno"] = "${postno_01}-${postno_02}";
 
	/** チェックOKセット */
	$sts["sts"] = true;
 
	/** 処理終了 */
	return $sts;
}
        $postno = mb_convert_kana($postno, "n");
        if(strlen($request->postcode) == 7){
            $postcode = substr($request->postcode ,0,3) . "-" . substr($request->postcode ,3);
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
        } elseif (strlen($request->postcode) == 8){
            return view('confirm',$request);
        }
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

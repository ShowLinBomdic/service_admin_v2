<?php

namespace App\Http\Controllers;

use App\Service\Account\User as accountUser;
use App\Service\Account\ServiceType as accountServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{

    //列表
    public function index($page=1){
        return $page;
    }


    //user詳細資料
    public function user_detail($user_id){

    }

    //新增或更新user
    public function form($user_id=0){

    }

    //儲存使用者資料
    public function store(Request $request){

    }

    //更新user的service type
    public function update_service_type(Request $request,$user_id=null){
        $obj = new accountServiceType();
        if($request->isMethod('GET')){
            $data = $obj->showForm();
            return view('account.serviceTypeUpdate',['data',$data]);
        }
        else{
            return $obj->update($request);
        }
    }

}

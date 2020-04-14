<?php

namespace App\Http\Controllers;

use App\Service\Account\User as accountUser;
use App\Service\Account\ServiceType as accountServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\Method;


class AccountController extends Controller
{
    protected $access_roles = ['superadministrator','administrator','user'];
    public function __construct(){


    }

    //列表
    public function getList($page=1){
        $data = new accountUser;
        $list_data = $data->get_list($page);
        return view('account.list',['data'=>$list_data]);
    }

    //新建user
    public function create_user(){
        $data = new accountUser;
        $form = $data->showForm();
        return view('account.create',[]);
    }

    //user詳細資料
    public function user_detail($user_id){
        $data = new accountUser;
        $user_detail = $data->getDetail($user_id);
    }

    //儲存使用者資料
    public function store_user(Request $request){
        $data = new accountUser;
        $data->store_data($request);
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

<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\Settings\Users as settingsUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index($page=1){
        /*$obj = new settingsUsers();
        $list_data = $obj->get_list();*/



        return view('settings.users');
    }

    public function form($user_id=0){
        return view('settings.users_form');
    }

    public function update(){

    }

    public function create(){
        //return view('settings.users_form');
    }

    public function store(){

    }

}

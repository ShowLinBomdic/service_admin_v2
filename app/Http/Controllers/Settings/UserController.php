<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\Settings\Users as settingsUsers;

class UserController extends Controller
{
    public function index($page=1){
        $obj = new settingsUsers();
        $list_data = $obj->get_list();
        return view('settings.users',['list_data'=>$list_data]);
    }

    public function form(){

    }

    public function update(){

    }

    public function create(){

    }

    public function store(){

    }

}

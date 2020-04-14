<?php

namespace App\Service\Account;

use Illuminate\Http\Request;
use App\Entity\Client;

class User{

    public function get_list($page=1){
        $client = new Client;
        return $client->getList();
    }

    public function showForm(){

    }

    public function store_data(Request $request){

    }

    public function getDetail($user_id){

    }
}

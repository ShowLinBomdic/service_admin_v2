<?php

namespace App\Service\Settings;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class Users{
    public function get_list($page=1){
        return DB::table('users')
            ->orderBy('id')
            ->offset(10)
            ->limit(5)
            ->get();
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index($page=1){
        return $page;
    }

    public function client_detail($client_id){

    }

    public function create(){

    }

    public function form($id=0){

    }

    public function store(Request $request){

    }



    public function deviceImport(Request $request,$client_id=0){
        switch($request->method()){
            case 'get':{

                break;
            }
            case 'post':{

                break;
            }
        }
    }

    public function report_usage(Request $request){

    }

    public function report_device(Request $request){

    }

    public function report_subscribe(Request $request){

    }

}

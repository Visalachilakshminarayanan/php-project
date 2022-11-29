<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\ordermodel;

class checkupdateController extends Controller
{
    public function gotocheck(){
        return view('check_update');
       }
       public function getDatafromtbl(){
        //return ordermodel::all();
        $data = ordermodel::all();
        return view('check_update',['order_dtl'=>$data]);

       }
       public function logout(Request $request) {
        Auth::logout();
        return view('/login_page');
      }
}

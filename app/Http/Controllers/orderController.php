<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ordermodel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class orderController extends Controller
{
    public function getState(){
   
        $data = ordermodel::all();
        //$rate=DB::table('product_details')->where('itemname',$cid)->
        //orderBy('rate','asc')->get();
       //return view('order details',['code'=>$data]);
       return view('order details');
        //return ordermodel::select('itemcode')->get();
    }
    public function insertOrder(Request $req){
        $insert = new ordermodel;
        try {
            $insert->orderno=$req->orderno;
            $insert->itemcode=$req->itemcode;
            $insert->productname=$req->itemname;
        //$insert->itemname=$req->itemname;
            $insert->qty=$req->qty;
            $insert->rate=$req->rate;
            $insert->totalprice=$req->total;
       // $insert->rate=$req->rate;
        $insert->custname=$req->custname;
        $insert->contactno=$req->contactno;
        $insert->emailid=$req->emailid;
        $insert->deliveraddress=$req->address;
        if( $insert->save()){
           //return 'success';
          return redirect('/order details');
        }
        return 'Failed';
        } catch (QueryException $e) {
            $error_code = $e->errorInfo[1];
            if ($error_code == 1062) {
                }
    
    return $e->errorInfo;
    }
    
    
    }
    public function logout(Request $request) {
        Auth::logout();
        return view('/login_page');
      }
    }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\ordermodel;
use Carbon\Carbon;

class salesController extends Controller
{
    // public function gotosales(){
    //     return view('sales_details');
    //    }

    //    public function displayinsales(){
    //     //return ordermodel::all();
    //     $data = ordermodel::all();
    //     return view('sales_details',['order_dtl'=>$data]);
    //    }

       public function filterdate(Request $req){
        try{
        $startdate = $req->frmdate;
        $todate = $req->todate;
        $disp = ordermodel::whereBetween('created_at',[
            $startdate,
            Carbon::parse($todate)->endOfDay(),
        ])->get(['created_at','orderno','itemcode','productname','qty','rate','totalprice','custname','contactno','emailid','deliveraddress']);
        return view('sales_details',['datefil'=>$disp]);
        
       }
       catch (QueryException $e) {
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

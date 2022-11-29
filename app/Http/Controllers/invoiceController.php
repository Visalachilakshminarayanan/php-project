<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\ordermodel;
use Carbon\Carbon;

class invoiceController extends Controller
{
    public function gotoinvoice(){
            return view('invoice_generation');
           }

    public function invoiceprint(Request $req){
            try
            {
            $ordernum = $req->orderno;
            //$orderDate = $req->order-date;
            $Inv = ordermodel::where('orderno', $ordernum)->get(['created_at','orderno','itemcode','productname','qty','rate','totalprice','custname','contactno','emailid','deliveraddress']);
            // $Inv = ordermodel::whereBetween('created_at',[
            //     Carbon::parse($orderDate)->endOfDay(),
            // ])->get(['created_at','orderno','itemcode','productname','qty','rate','totalprice','custname','contactno','emailid','deliveraddress']);
            return view('myPDF',['print'=>$Inv]);
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

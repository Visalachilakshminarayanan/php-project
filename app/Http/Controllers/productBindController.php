<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productBindModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; 

class productBindController extends Controller
{
    public function getItems(){
       
        // return ordermodel::all();
         //  return view('order');
    
         $data = productBindModel::all();
         return view('order details',['products'=>$data]);
    }
   
}

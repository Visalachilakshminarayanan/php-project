<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; 
use App\Models\signupModel;



class loginController extends Controller
{
    public function insertData(Request $req){
        $insert = new signupModel;
        try {
            $insert->username=$req->user;
        $insert->emailid=$req->email;
        $insert->password=$req->pwd;
        if( $insert->save()){
           //return 'success';
          // return redirect('/login');
          //return redirect()->route('login_page');
       
            return view('login_page');
           
        }
        return 'Failed';
        } catch (QueryException $e) {
            $error_code = $e->errorInfo[1];
            if ($error_code == 1062) {
                }

return $e->errorInfo;
            }
        }
      
        public function verifySignin(Request $requ){
            try{
            $email =  signupModel::select('emailid')->get();
            $pwd =  signupModel::select('password')->get();
            $d1 = $requ->email-signin;
            $d2 = $requ->pwd-signin;
            if(($email == $d1) && ($pwd == $d2))
            {
                //echo $email +" "+ $d1 + "and"+ $pwd +" "+ $d2;
                return view('check_update');
            }
            return 'Failed';
        } 
        catch (QueryException $e) {
            $error_code = $e->errorInfo[1];
            if ($error_code == 1062) {
                }
    return $e->errorInfo;
            }
            
        }
    
    // public function viewData(){
    //     //return signupmdl::get();
    //     //return signupmdl::first();
    //    // return signupmdl::orderBy('Username','asc')->get();
    //    // return signupmdl::orderBy('Username','asc')->orderBy('EmailId','asc')->get();
    //     return signupModel::select('username','emailid')->get();
    // }
    // public function handleProviderCallback($social)
    // {
    //     $user = Socialite::driver($social)->user();

    //     // $user->token;
    // }

    // protected function validateLogin(Request $request)
    // {
    //     $email = $request->email-signin;
    //     $pwd = $request->pwd-signin;
    //     $user = signupModel::where('emailid', '=', ' $email','and','password','=','$pwd')->exists();
    //     //Hash::check('INPUT PASSWORD', $user->pwd);
    // }
      

}

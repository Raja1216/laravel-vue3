<?php

namespace App\Http\Controllers;

use App\Models\OTP;
use App\Models\Otps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function sendOtp(Request $request){
    // return $request;
    $response = array();
    // $userId = Auth::user()->id;

    // $users = DB::table('users')->where('id', $userId)->first();

    if ( isset($request->mobile) && $request->mobile =="" ) {
        $response['error'] = 1;
        $response['message'] = 'Invalid mobile number';
        $response['loggedIn'] = 1;
    } else {

        $otp = rand(1000, 9999);
        $MSG91 = new OTP();

        $msg91Response = $MSG91->sendSMS($otp,$request->mobile);

        if($msg91Response['error']){
            $response['error'] = 1;
            $response['message'] = $msg91Response['message'];
            $response['loggedIn'] = 1;
        }else{

            Session::put('OTP', $otp);
            $response['error'] = 0;
            $response['message'] = 'Your OTP is created.';
            $response['OTP'] = $otp;
            $response['loggedIn'] = 1;

           
            $otpData = new Otps;
            $otpData->mobile = $request->mobile;
            $otpData->otp = $otp;
            try {
                $otpData->save();
            } catch (\Throwable $th) {
                throw $th;
            }
            
        }
    }
    echo json_encode($response);
    }

   

    public function verifyOtp(Request $request){
        $data = Otps::select('mobile','otp')->where('mobile',$request->mobile)->get();
        // return $data;
        if($data[0]->otp == $request->otp){
            $response['message'] = 'Your OTP is varified successfully.';
            echo json_encode($response);
        }
        else{
            $response['message'] = 'Your OTP is not valid.';
            echo json_encode($response); 
        }
        
       
    }



}

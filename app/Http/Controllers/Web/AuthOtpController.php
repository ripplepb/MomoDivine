<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthOtpController extends Controller
{
    public function sendOtp($mobile)
    {
        $user = User::where('mobile', $mobile)->where('registration_status',2)->count();
        if ($user > 0) {
            return 2;
        }

        $user = User::firstOrCreate([
            'mobile' => $mobile,
        ]);
        // $otp = rand(11111,99999);
        $otp = 11111;
        $user->otp = $otp;
        $user->password = bcrypt($otp);
        if($user->save()){
            // $message = "Your OTP is $user->otp, Please do not share this with any one. Team Bijli Cab";
            //     try {       
            //         SmsService::send($mobile,$message,1207167110548760370,4);
            //     } catch (Exception $e) {
            //         //throw $th;
            //     }
            return 1;
        }
        return 3;
    }

    public function verifyOTP($mobile,$otp)
    {
        $user = User::where('mobile', $mobile)->where('otp',$otp)->first();
        if ($user) {
            if ($user->registration_status == 1) {
                return 1;
            }else if($user->registration_status == 2){
                // 
                $credentials = array(
                    'mobile' => $user->mobile,
                    'password' => $user->otp,
                );
                if (Auth::guard('web')->attempt($credentials)) {
                    return 2;
                }
            }else{
                return 3;
            }
        }
        return 3;
    }

    public function registrationSave(Request $request)
    {
        $this->Validate($request,[
            'mobile' => 'required|numeric|digits:10',
            'name' => 'required|string|max:100',
            'email' => 'required|string|unique:users,email|max:100',
        ]);
        $mobile = $request->mobile;
        $otp = $request->otp;
        $user = User::where('mobile', $mobile)->where('otp',$otp)->first();
        if(empty($user)){
            return 2;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->otp);
        $user->registration_status = 2;
        if($user->save()){
            // 
            $credentials = array(
                'mobile' =>$mobile,
                'password' => $request->otp,
            );
            if (Auth::guard('web')->attempt($credentials)) {
                return 1;
            }
        }else{
            return 2;
        }
        return 3;
    }
}

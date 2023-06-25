<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('web.login');
    }
    public function sendOtpLogin($mobile)
    {
        $user = User::where('mobile', $mobile)->where('registration_status', 2)->count();
        if ($user == 0) {
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

    public function verifyLoginOtp($mobile,$otp)
    {
        $user = User::where('mobile', $mobile)->where('otp',$otp)->first();
        if ($user) {
            if ($user->registration_status == 1) {
                return 11;
            }else if($user->registration_status == 2){
                // 
                $credentials = array(
                    'mobile' => $user->mobile,
                    'password' => $user->otp,
                );
                if (Auth::guard('web')->attempt($credentials)) {
                    return 21;
                }
            }else{
                return 31;
            }
        }
        return 3;
    }

    public function logout(Request $request, Guard $guard)
    {
        $guard->logout();
        $request->session()->invalidate();
        return redirect()->route('web.index');
    }
}

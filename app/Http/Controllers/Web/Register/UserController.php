<?php

namespace App\Http\Controllers\Web\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric|max:9999999999',
            'otp' => 'required'
        ]);

            $register_user = new User();
            $register_user->name = $request->input('name');
            $register_user->email = $request->input('email');
            $register_user->mobile = $request->input('mobile');
            $register_user->password = Hash::make($request->input('otp'));
            $register_user->otp = $request->input('otp');

            $register_user->save();
            if ($register_user->save()) {
                return response()->json(['status' => 1]);
            } else {
                return response()->json(['status' => 2]);
            }
    }
    
}

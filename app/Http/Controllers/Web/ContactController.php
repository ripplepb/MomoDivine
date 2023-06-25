<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|min:10',
            'message' => 'required|string|max:500',
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha' => 'Enter valid captcha code shown in the image'
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');

        $contact->save();

        if($contact->save()){
            return redirect(url()->previous() .'#contact_us')->with('message', 'We will get back to you soon!!');
        } else {
            return redirect(url()->previous() .'#contact_us')->with('error', 'Something Went Wrong');
        }

    }
    
    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}

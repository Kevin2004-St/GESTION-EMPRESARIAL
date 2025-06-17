<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtpController extends Controller
{
    //Vista del formulario para ingreasr OTP
    public function showVerifyForm(){
        return view('auth.verify-otp');
    }

    public function verify(Request $request){
        $request->validate([
            'otp'=> 'required|digits:6'
        ]);

        $user = Auth::user();

        if(!$user || $user->otp_code !== $request->otp){
            return back()->withErrors(['otp'=>'El codigo es incorrecto']);
        }

        if (now()->greaterThan($user->otp_expires_at)) {
            Auth::logout();
            return redirect()->route('login')->withErrors(['otp'=>'El código ha expirado. Por favor incia sesión de nuevo']);
        }

        /** @var \App\Models\User $user */
        $user->otp_code = null;
        $user->otp_expires_at = null;
        $user->save();

        return redirect()->route('home');

    }
}

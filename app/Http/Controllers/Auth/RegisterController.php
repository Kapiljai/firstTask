<?php

namespace App\Http\Controllers\Auth;

use App\helpers\helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.sign_up');
    }


    public function store(Request $request)
    {
        $data = new helpers();
        return $data->storeRegister($request);
    }

    public function authentication(Request $request)
    {


        $data = new helpers();
        return $data->login_authentication($request);
    }
    public function login()
    {
        return view('auth.sign_in');
    }

    public function forgot()
    {
        return view('auth.forget');
    }

    public function logout(Request  $request)
    {
        $user = Auth::user();
        if ($user) {
            $user->device_identifier = null;
            $user->save();
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Optionally clear the device identifier cookie
        $cookie = Cookie::forget('device_identifier');

        $request->session()->forget('user_id');
        return redirect()->route('sign_in')->with('message', 'Logged out successfully');
    }
}

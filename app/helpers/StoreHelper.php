<?php

namespace App\helpers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class helpers
{
    // public function storeRegister(Request $request)
    // {
    //     $data = new User();
    //     $data->name = $request->f_name . ' ' . $request->l_name;
    //     $data->f_name = $request->f_name;
    //     $data->l_name = $request->l_name;
    //     $data->email = $request->email;
    //     $data->password = Hash::make($request->password);

    //     $data->save();
    //     // Log in the user
    //     Auth::login($data);
    //     $request->session()->put('user_id', Auth::id());

    //     Alert::success('Registration successful!');
    //     return redirect('/');
    // }

    // public function login_authentication(Request $request)
    // {
    //     $data = User::where('email', $request->email)->first();
    //     if (!$data) {
    //         return redirect()->back()->withErrors('fail', 'User ot found');
    //     } else {
    //         $password = $request->password;
    //         $email = $request->email;
    //         if (Auth::attempt(['email' => $email, 'password' => $password])) {
    //             return redirect('/')->withSuccess('success', 'successfully login');
    //         }
    //         else {
    //             return redirect()->back()->with('fail' , 'Your Provided credentials do not match with our record');
    //         }
    //     }
    // }
}

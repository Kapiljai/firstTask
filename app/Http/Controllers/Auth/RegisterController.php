<?php

namespace App\Http\Controllers\Auth;

use App\helpers\helpers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.sign_up');
    }


    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->f_name . ' ' . $request->l_name;
        $data->f_name = $request->f_name;
        $data->l_name = $request->l_name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);

        $data->save();
        // Log in the user
        Auth::login($data);
        $request->session()->put('user_id', Auth::id());
        FacadesAlert::success('Registration successful!');
        return redirect('/');
    }

    public function authentication(Request $request)
    {


        $data = User::where('email', $request->email)->first();
        if (!$data) {
            return redirect()->back()->withErrors('fail', 'User ot found');
        } else {
            $password = $request->password;
            $email = $request->email;
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect('/')->withSuccess('success', 'successfully login');
            }
            else {
                return redirect()->back()->with('fail' , 'Your Provided credentials do not match with our record');
            }
        }
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
        $request->session()->regenerateToken();;

        $request->session()->forget('user_id');
        return redirect()->route('login')->with('message', 'Logged out successfully');
    }

            public function gogleLogin()
            {
                return Socialite::driver('google')->redirect();
            }
           
            public function googleHandler()
            {


                $user = Socialite::driver('google')->user();
                
                try {
                    $exist = User::where('email' , $user->email)->first();
                    if (Auth::check($exist)) {
                        return redirect('/');
                        FacadesAlert::success('message' , 'Successfully Login');
                        Auth::login($exist);
                        
                    }
                    
                    else{
                        $newUser = new User();
                        $newUser->email = $user->email;
                        $newUser->name = $user->name;
                        $newUser->password = Hash::make('12345678');
                        $newUser->save();
                        Auth::login($newUser);
                        return redirect('/');
                        FacadesAlert::success('message' , 'Successfully Login');
                        
                    }
                    
                } 
                catch (\Illuminate\Database\QueryException $ex) {
                    if ($ex->errorInfo[1] == 1062) {
                        // Duplicate entry error code
                        $existingUser = User::where('email', $user->email)->first();
                        Auth::login($existingUser);
                        return redirect('/');
                        FacadesAlert::success('message', 'Successfully logged in');
                    } else {
                        // Handle other database exceptions
                        Log::error('Database error:', ['error' => $ex->getMessage()]);
                        return redirect('/')->with('error', 'An error occurred: ' . $ex->getMessage());
                    }
                }
                
                
                catch (\Throwable $th) {
                    Log::error('Google login error:', ['error' => $th->getMessage()]);
                    
                    Log::info('Google user email:', ['email' => $user->email]);
                    Log::info('Existing user:', ['user' => $exist]);
                    return $th->getMessage();
                }

            }
}

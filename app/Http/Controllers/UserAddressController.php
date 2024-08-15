<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    //
    public function user_profile_address(Request $request)
    {
        $data = UserAddress::create($request->all());
        return response()->json([
            'success' => true , 
            'message'=>'User Address SUccessfully Add' , 
            'status' => 200
        ]);
    }
}

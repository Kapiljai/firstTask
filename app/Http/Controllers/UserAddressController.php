<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserAddressController extends Controller
{
    //

    public function  user_profile_address(Request $request)
    {
        Log::info('Request Data: ', $request->all());
        try {
           
            $validatedData = $request->validate([
                'full_address' => 'required|string',
                'country' => 'required|string',
                'state' => 'required|string',
                'zipcode' => 'required|string',
                'city' => 'required|string',
                
            ]);

            $user = UserAddress::create($request->all());
            // $user->address = $validatedData['full_address'];
            // $user->country = $validatedData['country'];
            // $user->state = $validatedData['state'];
            // $user->zipcode = $validatedData['zipcode'];
            // $user->city = $validatedData['city'];
            // $user->save();

            return response()->json(['message' => 'Address updated successfully'], 200);
        } catch (\Exception $e) {
            // Log the exception and return a generic error message
            Log::error($e->getMessage());
            return response()->json(['message' => 'An error occurred while updating the address'], 500);
        }
    }
}

<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('profile.index', compact('user'));
        } else {
            return redirect()->back()->with('fail', 'Please Login Your Account');
        }
    }

    public function user_profile_update(Request $request, $id)
    {
        try {
            // Handle the file upload
            $user = User::findOrFail($request->user_id);
            if ($request->hasFile('image')) {
                if ($user->image) {
                    $oldImagePath = public_path('image/user' . $user->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('image/user'), $imageName);
     
                // Update listing in database
                // $listing = User::findOrfail($id);
                $user->id = $request->user_id;
                $user->image = $imageName;
                $user->save();
     Alert::success('Image uploaded and saved successfully!');
                return response()->json(['message' => 'Image uploaded and saved successfully!']);
            }
     
            return response()->json(['message' => 'No file uploaded'], 400);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Image upload failed: ' . $e->getMessage());
            return response()->json(['message' => 'Image upload failed: ' . $e->getMessage()], 500);
        }
    }
 }


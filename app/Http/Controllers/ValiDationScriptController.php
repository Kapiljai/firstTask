<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\ValiDationScript;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ValiDationScriptController extends Controller
{

    public function home(){
        return view('home');
    }
    public function valiForm()
    {
        return view('form');
    }

    public function songAdd()
    {
        return view('song');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'video' => 'required',

        ]);

        try {
            $data = new ValiDationScript();
        $data->email = $request->email;
        $data->name = $request->name;
        $data->video = $request->video;
        $data->save();
        return redirect('/show');
        } catch (\Throwable $th) {
            return "Error" . $th->getMessage() . ''. $th->getfile();
        }


    }

    public function show()
    {
        $data = ValiDationScript::all();
        return view('show' , ['data' => $data]);

    }

    public function storeApis(Request $request)
    {


        $validated = Validator::make($request->all(),[
            'email' => 'required',
            'name' => 'required',
            'video' => 'required',

        ]);
        if ($validated->fails()) {
            return response()->json(['error' => $validated->errors()], 422);
        }


        // Create a new ValiDationScript instance and save the data
        $data = new ValiDationScript();
        $data->email = $request->email;
        $data->name = $request->name;
        $data->video = $request->video;
        $data->save();

        // Prepare the response data
        $response = [
            'success' => true,
            'message' => 'Your Post Successfully Registered',
            'status' => 201,
            'data' => $data
        ];

        // Return the response with a 201 status code
        return response()->json($response, 201);
    }

    public function dataGetApis()
    {
        $data = ValiDationScript::all();
        $response = [
            'success' => true,
            'message' => 'Your Post Successfully Registered',
            'status' => 201,
            'data' => $data
        ];
        return response()->json($response, 201);
    }

}


// C:\xampp\tmp\php7517.tmp
// xSTUoWYCmdo

<?php

namespace App\Http\Controllers;

use App\Models\Form1;
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

    public function show_accordian()
    {
        return view('accordian.accordian');
    }

    public function show_accordian_submit(Request $request)
    {
        // Validate the input data for all forms
        $validatedData = $request->validate([
            'form1_field' => 'nullable|string|max:255',
            'form2_field' => 'nullable|string|max:255',
            'form3_field' => 'nullable|string|max:255',
            'form4_field' => 'nullable|string|max:255',
            'form5_field' => 'nullable|string|max:255',
        ]);

        // Create or update the entry in the database
        Form1::updateOrCreate(
            ['id' => $request->input('id')], // Assumes there is an ID to identify the record, adjust if needed
            $validatedData
        );

        return redirect()->back()->with('success', 'Forms submitted successfully');
    }

}


// C:\xampp\tmp\php7517.tmp
// xSTUoWYCmdo

<?php

namespace App\Http\Controllers\help;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpCenterController extends Controller
{
    //

    public function index()
    {
        return view('help.help-center');
    }

    
}

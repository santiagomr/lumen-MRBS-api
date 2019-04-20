<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repetition;

class RepetitionsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request){

            $repeat = Repetition::orderBy('id', 'desc')->first();
            return response()->json($repeat, 200);

    }

}

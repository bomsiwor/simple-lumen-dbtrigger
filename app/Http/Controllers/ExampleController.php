<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
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

    public function greet()
    {
        $data = [
            'message' => "Hai!",
            'status' => 200,
            'title' => 'Success'
        ];
        return response()->json($data, 200);
    }
}

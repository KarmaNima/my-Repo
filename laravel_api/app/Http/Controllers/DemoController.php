<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        $array = [
            [
                'name' => 'Tashi',
                'email' => 'Tashi@example.com',
            ],
            [
                'name' => 'Dawa',
                'email' => 'dawa@example.com',
            ]
        ];
        return response()->json([
            'message' => '2 Users found',
            'data' => $array,
            'status' => true
        ], 200);
    }
}

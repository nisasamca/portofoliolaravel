<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $data = ['name' => 'nissa', 'age' => 16, 'kelas' => '15' ];
        return view('index', $data);
    }
}

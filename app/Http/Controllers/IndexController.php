<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function dashboard()
    {
        Storage::disk('local')->put('example.txt', 'Contents');
        return view('dashboard');
    }
}

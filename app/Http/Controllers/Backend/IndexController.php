<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function dashboard()
    {
        Storage::disk('local')->put('example.txt', 'Contents');
        return view('backend.dashboard');
    }
}

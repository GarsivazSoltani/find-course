<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $standards = DB::table('standard')->get();
        dd($standards);
        return view('index', compact('standards'));
    }
}

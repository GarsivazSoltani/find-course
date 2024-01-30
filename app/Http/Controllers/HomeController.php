<?php

namespace App\Http\Controllers;

use App\Models\Standard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        // $standards = DB::table('standard')->get();
        // dd($standards);
        // group_name	khooshe_name
        // $standards = DB::table('standard')->where('khooshe_name', 'صنعت')->get();

        $standards = Standard::all();
        // dd($standards);

        return view('index', compact('standards'));
    }
}

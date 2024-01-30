<?php

namespace App\Http\Controllers;

use App\Models\AzmoonData;
use App\Models\Standard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        // $standards = DB::table('standard')->get();
        // group_name	khooshe_name
        // $standards = DB::table('standard')->where('khooshe_name', 'صنعت')->get();

        // $standards = Standard::all();
        // $standards = Standard::find([15,25,42,85]);

        $standards = Standard::take(25)->get();
        return view('index', compact('standards'));
    }

    public function fechStandard()
    {
        // $azmoonDatas = AzmoonData::take(25)->get();

        // $tesult = Standard::select('standard.*')
        //     ->join('azmoon_data', 'id', '=', 'standard.id');
        // $tesult = Standard::select('standard.*')->join('azmoon_data', 'id', '=', 'standard.standard_id');
        $standards = Standard::take(2)->get();
        // $standards = Standard::all();
        return view('standard', compact('standards'));
    }

    public function fechAzmoonData()
    {
        $azmoonDatas = AzmoonData::take(25)->get();
        return view('azmoondata', compact('azmoonDatas'));
    }
}

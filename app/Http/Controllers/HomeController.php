<?php

namespace App\Http\Controllers;

use App\Models\Azmoon;
use App\Models\AzmoonData;
use App\Models\AzmoonHoze;
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

    public function findStandardNameForm()
    {
        $standards = [];
        // $standards = Standard::where('name', 'like', '%کاربر رایانه%')
        //                             ->orderBy('name')
        //                             // ->take(10)
        //                             ->get();
        // dd(now());
        return view('standard', compact('standards'));
    }
    public function findStandard(Request $request)
    {
        // dd($request->standard);
        // $standardId = Standard::where('name', '=', $standardName)->get();
        // $dateAzmoon = '01/10/24';
        // $joinDatas = Standard::find($standardId[0]->id)->azmoonDataTable->where('date', '=' , $dateAzmoon);

        // $standards = Standard::where('name', 'like', '%' . $request->standard . '%')
        //                     ->orderBy('name')
        //                     ->get();

        // $standards = Standard::whereHas('azmoonTable', $filter = function ($query) {
        //     $query->where('sabte_nam_to', '>', '1400/01/14');
        //     // ->where('standard.name', 'like', '%'. request()->input('standard') .'%');
        //     // dd($query->toSql());
        // })->with(['azmoonTable' => $filter])->toSql();

        // $standards = Azmoon::whereHas('standardTable', $filter = function ($query) {
        //     $query->where('name', 'like', '%'. request()->input('standard') .'%');
        //     // dd($query->toSql());
        // })->with(['standardTable' => $filter])->get();


        // $standards = DB::table('standard')
        //     ->join('azmoon_data', 'standard.id', '=', 'azmoon_data.standard_id')
        //     ->join('azmoon', 'azmoon.id', '=', 'azmoon_data.azmoon_code')
        //     ->select('standard.*')
        //     ->where('standard.name', 'like', '%کاربر%')
        //     ->AND('azmoon.sabte_nam_to', '>', '1402/11/15')
        //     ->limit(0, 30)
        //     ->get();

        // ----------------------------------------
        // $standards = DB::table('standard')->where('name', 'like', '%' . $request->standard . '%')->get();
        // $standards = DB::table('standard')->pluck($request->standard);
        // $standards = DB::table('standard')->select('id', 'name', 'code', 'khooshe_name')->get();
        $standards = DB::table('standard')
        ->join('azmoon_data', 'standard.id', '=', 'azmoon_data.standard_id')
        ->join('azmoon', 'azmoon.id', '=', 'azmoon_data.azmoon_code')
        ->where('standard.name', 'like', '%' . $request->standard . '%')
        ->where('azmoon.sabte_nam_to', '>', '1402/11/15')
        // ->select('standard.name', 'azmoon_data.*', 'azmoon.*')
        ->select('standard.name', 'standard.code', 'standard.khooshe_name')
        ->orderBy('standard.name')
        ->limit(20)
        ->get();
        
        dd($standards->count());
        return view('standard', compact('standards'));
    }

    public function fechAzmoon()
    {
        // $azmoons = Azmoon::all();
        // $azmoons = Azmoon::take(25)->get();
        $azmoons = Azmoon::find(98199)->get();
        return view('azmoon', compact('azmoons'));
    }

    public function fechAzmoonData()
    {
        $azmoonDatas = AzmoonData::take(25)->get();
        return view('azmoondata', compact('azmoonDatas'));
    }

    public function fechAzmoonHoze()
    {
        $dateAzmoon = '01/10/24';
        $azmoonHozes = AzmoonHoze::where('date', '=', $dateAzmoon);
        return view('azmoonhoze', compact('azmoonHozes'));
    }

    public function joinTables()
    {
        $standardName = 'آرایشگر و پیرایشگر موی مردانه';
        $standardId = Standard::where('name', '=', $standardName)->get();
        // dd($standardId[0]->id);

        // $joinDatas = AzmoonData::where('standard.name', '=', $standardName)->standard;
        // $joinDatas = AzmoonData::where('name', $standardName)->standard;
        $dateAzmoon = '01/10/24';
        $joinDatas = Standard::find($standardId[0]->id)->azmoonDataTable->where('date', '=' , $dateAzmoon);

        // $joinDatas= Standard::with('standard.azmoonDataTable')->get();

        // dd($joinDatas);
        return view('join', compact('joinDatas'));
    }
}

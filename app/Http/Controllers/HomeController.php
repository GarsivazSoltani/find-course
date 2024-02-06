<?php

namespace App\Http\Controllers;

use App\Models\Azmoon;
use App\Models\AzmoonData;
use App\Models\AzmoonHoze;
use App\Models\Standard;
use App\Services\FindStandard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

        // $standards = Standard::take(10)->get();
        $standards = Standard::paginate(10);
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

        // $st = new FindStandard();
        $st = resolve(FindStandard::class);
        $standards = $st->find($request);
        // dd($standards->all());

        // $result = $standards->filter(function ($value, $key){
        //     return $value['group_name'] == 'صنايع خودرو';
        // });
        // dd($result->all());

        // $s = $standards->where('group_nam', 'صنايع خودرو');
        // dd($s);
        // $json = json_encode($standards);
        // dd($json);
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

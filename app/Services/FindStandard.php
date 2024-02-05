<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Standard;
use App\Models\Azmoon;
use App\Models\AzmoonData;

class FindStandard
{
    public function find(Request $request)
    {
        // $standards = DB::table('standard')->where('name', 'like', '%' . $request->standard . '%')->get();
        // $standards = DB::table('standard')->pluck($request->standard);
        // $standards = DB::table('standard')->select('id', 'name', 'code', 'khooshe_name')->get();
        $standards = DB::table('standard')
                    ->join('azmoon_data', 'standard.id', '=', 'azmoon_data.standard_id')
                    ->join('azmoon', 'azmoon.id', '=', 'azmoon_data.azmoon_code')
                    ->where('standard.name', 'like', '%' . $request->standard . '%')
                    ->where('azmoon.sabte_nam_to', '>', '1402/11/15')
                    // ->select('standard.*', 'azmoon_data.*', 'azmoon.*')
                    ->select('standard.name', 'standard.code', 'standard.khooshe_name')
                    ->orderBy('standard.name')
                    // ->limit(20)
                    ->get();
        return $standards;
    }
}

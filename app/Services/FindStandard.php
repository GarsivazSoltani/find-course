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

        /*
        $standards = DB::table('standard')
                    ->join('azmoon_data', 'standard.id', '=', 'azmoon_data.standard_id')
                    ->join('azmoon', 'azmoon.id', '=', 'azmoon_data.azmoon_code')
                    ->where('standard.name', 'like', '%' . $request->standard . '%')
                    ->where('azmoon.sabte_nam_to', '>', '1402/11/15')
                    // ->select('standard.*', 'azmoon_data.*', 'azmoon.*')
                    ->select('standard.id', 'standard.name', 'standard.code', 'standard.khooshe_name', 'standard.group_name', 
                    'azmoon_data.shahr', 'azmoon_data.hoze')
                    ->orderBy('standard.name')
                    // ->limit(100)
                    ->get();
        */

        /*
        $standards = DB::table('standard')
                    ->join('v_azmoon', 'standard.id', '=', 'v_azmoon.standard_id')
                    ->where('standard.name', 'like', '%' . $request->standard . '%')
                    ->select('standard.id', 'standard.name', 'standard.code', 'standard.khooshe_name', 'standard.group_name', 
                    'v_azmoon.ostanname', 'v_azmoon.shahrname')
                    ->orderBy('standard.name')
                    ->get();
        */

        $standards = DB::table('standard')
                    ->join('v_azmoon', 'standard.id', '=', 'v_azmoon.standard_id')
                    ->select('v_azmoon.id', 'v_azmoon.name', 'v_azmoon.ostanname')
                    ->where('standard.name', 'like', '%' . $request->standard . '%')
                    ->orderBy('standard.name')
                    ->get();
        return $standards;
    }
}

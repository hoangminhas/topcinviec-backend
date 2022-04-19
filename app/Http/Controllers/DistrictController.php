<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    public function get_districts_by_province_id($province_id){
        $districts = DB::table('districts')->where('province_id',$province_id)->get();
        return response()->json($districts, 200);
//        return view('recruiters.create', compact('districts'));
    }
}

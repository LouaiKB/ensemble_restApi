<?php

namespace App\Http\Controllers;

use App\RnaSeq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RnaSeqController extends Controller 
{
    
    public function showAllRnaSeq() 
    {
        $query = DB::table('seq_region')->select('*')->limit(100)->get();
        return response()->json($query);
    }
    
    public function showOneSeqRegion($id) 
    {
        $query = DB::table('seq_region')
                ->select('*')
                ->where('seq_region_id', '=', "$id")
                ->get();
        return response()->json($query);
    }

    public function showSeqRegionByName(Request $request)
    {
        $name = $request->get("name");
        $query = DB::table('seq_region')
                ->select("*")
                ->where('name', '=', "$name")
                ->get(); 
        return response()->json($query);
    }

}
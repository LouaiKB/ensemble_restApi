<?php

namespace App\Http\Controllers;

use App\RnaSeq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RnaSeqController extends Controller 
{
    
    public function showAllRnaSeq() 
    {
        $query = DB::select('SELECT * FROM seq_region LIMIT 100');
        return response()->json($query);
    }
    
    public function showOneSeqRegion($id) 
    {
        $query = DB::select("SELECT * FROM seq_region WHERE seq_region_id=$id");
        return response()->json($query);
    }

    public function showSeqRegionByName(Request $request)
    {
        $name = $request->get("name");
        $query = DB::select("SELECT * FROM seq_region WHERE name=$name");
        return response()->json($query);
    }

}
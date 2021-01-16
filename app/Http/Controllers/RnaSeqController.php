<?php

namespace App\Http\Controllers;

use App\RnaSeq;
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

}
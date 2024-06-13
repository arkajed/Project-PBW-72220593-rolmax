<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JamTangan;

class APIController extends Controller
{
    public function searchwatch(Request $request){
        $cari = $request->input('q');

        $watch = JamTangan::where('merk', 'LIKE', "%$cari%")->get();

        if($watch->isEmpty()){
            return response()->json([
                'success' => false,
                'data' => 'Data tidak ditemukan'
            ], 404)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5501');
        }else{
            return response()->json([
                'success' => true,
                'data' => $watch
            ], 200)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5501');
        }
    }
}
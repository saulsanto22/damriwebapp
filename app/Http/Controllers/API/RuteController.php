<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rute;


class RuteController extends Controller
{
    //
        public function index(){

        $info_rute = Rute::all();
    if ($info_rute) {
            return ResponseFormatter::success($info_rute , 'Data rute berhasil diambil!');
        }else{
            return ResponseFormatter::error(null , 'Data rute tidak berhasil diambil!', 404);
        }

    }

    public function show($id){
        $rute = Rute::find($id);
        if ($rute) {
             return ResponseFormatter::success($rute , 'Data Jadwal berhasil diambil!');
        }else{
            return ResponseFormatter::error(null , 'Data Jadwal tidak berhasil diambil!', 404);
        }

    }
}

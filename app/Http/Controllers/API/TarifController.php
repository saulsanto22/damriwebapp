<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarif;

class TarifController extends Controller
{
    public function index(){

        $info_tarif = Tarif::with(['jadwal' , 'rute'])->get();


        if ($info_tarif) {
            return ResponseFormatter::success($info_tarif , 'Data rute berhasil diambil!');
        }else{
            return ResponseFormatter::error(null , 'Data rute tidak berhasil diambil!', 404);
        }

    }


    public function show($id){
        $tarif = Tarifl::find($id);
        if ($tarif) {
             return ResponseFormatter::success($tarif , 'Data Jadwal berhasil diambil!');
        }else{
            return ResponseFormatter::error(null , 'Data Jadwal tidak berhasil diambil!', 404);
        }

    }


}

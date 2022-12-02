<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index(){

        $info_jadwal = Jadwal::all();
        if ($info_jadwal) {
            return ResponseFormatter::success($info_jadwal , 'Data Jadwal berhasil diambil!');
        }else{
            return ResponseFormatter::error(null , 'Data Jadwal tidak berhasil diambil!', 404);
        }

    }

    public function show($id){
        $jadwal = Jadwal::find($id);
        if ($jadwal) {
             return ResponseFormatter::success($jadwal , 'Data Jadwal berhasil diambil!');
        }else{
            return ResponseFormatter::error(null , 'Data Jadwal tidak berhasil diambil!', 404);
        }

    }
    


}

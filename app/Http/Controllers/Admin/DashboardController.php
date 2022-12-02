<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Rute;
use App\Models\Tarif;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('pages.admin.dashboard',[  
        'jadwal' => Jadwal::count(),
        'rute' => Rute::count(),
         'tarif' => Tarif::count()]);
    }
}

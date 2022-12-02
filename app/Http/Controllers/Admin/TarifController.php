<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TarifRequest;
use App\Models\Jadwal;
use App\Models\Rute;
use App\Models\Tarif;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tarif = Tarif::with(['jadwal', 'rute'])->get();
        return view('pages.admin.tarif.index' , ['tarif'=> $tarif]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwal = Jadwal::all();
        $rute = Rute::all();
        return view('pages.admin.tarif.create',
         ['jadwal'=>$jadwal , 
         'rute'=>$rute]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TarifRequest $request)
    {
        //

        $create_data = $request->all();
        Tarif::create($create_data);
        return redirect()->route('tarif.index')->with("succes" , "Tarif Berhasil ditambahkan !");;

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          $item = Tarif::findOrFail($id);
        $jadwal = Jadwal::all();
        $rute = Rute::all();
        return view('pages.admin.tarif.edit', [
            'item' => $item,
            'jadwal' => $jadwal,
            'rute'=>$rute
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TarifRequest $request, $id)
    {
        //
        $data = $request->all();
        return redirect()->route('tarif.index')->with("update" , "Tarif Berhasil diubah !");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Tarif::findOrFail($id);
        $item->delete();
        // Alert::error('Hapus', 'Paket Wisata Berhasil dihapus');
        return redirect()->route('tarif.index')->with("delete" , "Tarif Berhasil dihapus !");;
    }
}

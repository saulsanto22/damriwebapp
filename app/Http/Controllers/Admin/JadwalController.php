<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\JadwalRequest;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jadwal = Jadwal::all();
        // calidaso
        return view('pages.admin.jadwal.index' , ['jadwal' => $jadwal]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JadwalRequest $request)
    {
        //
        $data = $request->all();
      
        Jadwal::create($data);
        // Alert::success('Pesan', 'Paket Wisata Behasil ditambah');
        return redirect()->route('jadwal.index')->with("succes" , "Jadwal Berhasil ditambahkan !");
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
        $item = Jadwal::findOrFail($id);
        return view('pages.admin.jadwal.edit',
         ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JadwalRequest $request, $id)
    {
        //
        $data = $request->all();
        $item = Jadwal::findOrFail($id);
        $item->update($data);
        // Alert::info('Pesan', 'Paket Wisata Behasil Diubah');

        return redirect()->route('jadwal.index')->with("update" , "Jadwal Berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Jadwal::findOrFail($id);
        $item->delete();
        // Alert::error('Hapus', 'Paket Wisata Berhasil dihapus');
        return redirect()->route('jadwal.index')->with("delete" , "Jadwal Berhasil dihapus !");
        //
    }
}

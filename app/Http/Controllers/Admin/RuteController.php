<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RuteRequest;
use App\Models\Rute;
use App\Providers\ConvertMessagesIntoSweetAlert;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rute = Rute::all();
        return view('pages.admin.rute.index', ['rute'=>$rute]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.rute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuteRequest $request)
    {
        $data = $request->all();
        Rute::create($data);
        return redirect()->route('rute.index')->with("succes" , "Rute Berhasil ditambahkan !");;

        //
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
        $item = Rute::findOrFail($id);
        return view('pages.admin.rute.edit', [
            'item' => $item
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RuteRequest $request, $id)
    {
        //
        $data = $request->all();
        $item = Rute::findOrFail($id);
        $item->update($data);
        // Alert::info('Pesan', 'Paket Wisata Behasil Diubah');
    //  alert()->success('You have been logged out.', 'Good bye!');
        return redirect()-> route('rute.index')->with("update" , "Rute Berhasil diubah !");;
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
        $item = Rute::findOrFail($id);
        $item->delete();
        // Alert::error('Hapus', 'Paket Wisata Berhasil dihapus');
        return redirect()->route('rute.index')->with("delete" , "Rute Berhasil dihapus !");;
    }
}

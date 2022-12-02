    <!-- Menginculde  -->
    @extends('layouts.admin')

    @section('title', "Damri")
    @section('content')
    <!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Tarif</h1>
        </div>


    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
             
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
         
            <form action="{{route('tarif.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                    <label for="jadwal_id">Jadwal</label>
                    <select name="jadwal_id" required= "" class="form-control">
                        <option value="">Pilih Jadwal</option>
                    @foreach ( $jadwal as $jdwl)
                  <option value="{{ $jdwl->id}}">{{$jdwl->jadwal}}</option>

                        @endforeach
                    </select>
                    <div class="form-group">
                    <label for="rutel_id">Jurusan / Rute</label>
                    <select name="rute_id" required= "" class="form-control">
                        <option value="">Pilih Jurusan</option>
                    @foreach ( $rute as $rt)
                  <option value="{{ $rt->id}}">{{$rt->jurusan}}</option>

                        @endforeach
                    </select>
                   
                </div>
               
                <div class="form-group">
        <label for="tarif">Tarif / Ongkos :</label>
        <input type="number" name="tarif" class="form-control" placeholder="Tarif" value="">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        
        </form>
        </div>
    </div>


    </div>
    <!-- /.container-fluid -->

    @endsection
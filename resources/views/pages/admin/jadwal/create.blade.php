    <!-- Menginculde  -->
    @extends('layouts.admin')
    @section('title', "Damri")

    @section('content')

    <!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Jadwal</h1>
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
            <form action="{{ route('jadwal.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_jadwal">nama jadwal</label>
                <input type="text" name="jadwal" class="form-control" placeholder="Nama Jadwal" value="{{ old('jadwal')}}">
            </div>
            <div class="form-group">
                <label for="jam_operasi">Jam Operasi</label>
                <input type="text" name="jam_operasi" class="form-control" placeholder="Jam Operasi" value="{{ old('jam_operasi')}}">
            </div>
            <div class="form-group">
                <label for="jam_akhir_operasi">Jam Akhir Operasi</label>
                <input type="text" name="jam_akhir_operasi" class="form-control" placeholder="Jam Akhir Operasi" value="{{ old('jam_akhir_operasi')}}">
            </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        
        </form>
        </div>
    </div>


    </div>
    <!-- /.container-fluid -->

    @endsection
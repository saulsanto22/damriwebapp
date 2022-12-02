    <!-- Menginculde  -->
    @extends('layouts.admin')


    @section('content')
    <!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Rute</h1>
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
            <form action="{{ route('rute.store')}}" method="post">
            @csrf
        
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ old('')}}">
            </div>
            <div class="form-group">
                <label for="rute_pergi">Rute Pergi</label>
                <input type="text" name="rute_pergi" class="form-control" placeholder="Rute Pergil" value="{{ old('')}}">
            </div>
            <div class="form-group">
                <label for="rute_pulang">Rute Pulang</label>
                <input type="text" name="rute_pulang" class="form-control" placeholder="Rute Pulangl" value="{{ old('l')}}">
            </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        
        </form>
        </div>
    </div>


    </div>
    <!-- /.container-fluid -->

    @endsection
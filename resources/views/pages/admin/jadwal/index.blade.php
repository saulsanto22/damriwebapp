@extends('layouts.admin' )
@section('title', 'Damri')
@section('content')

  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Halaman Jadwal</h1>

    <a href="{{ route('jadwal.create')}}" class="btn-sm btn-primary shadow-sm">
        <i class="fas-plus fa-sm text-white-50">Tambah data Jadwal</i>
    </a>
</div>

@if (session('succes'))
<div class="alert alert-success">
    {{ session('succes') }}
</div>
@elseif (session('update'))
<div class="alert alert-info">
    {{ session('update') }}
</div>
@elseif (session('delete'))
<div class="alert alert-danger">
    {{ session('delete') }}
</div>
@endif
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
                
                <thead>
                  
                    <tr>
                        <td>No</td>
                       <td>ID</td>
                       <td>Jadwal</td>
                       <td>Jam Operasi</td>
                       <td>Jam Berakhir Operasi</td>
                       <td>Action</td>
                </tr>
                 
                </thead>
                 <tbody>
                     @forelse ($jadwal as $item)
                     <tr>
                     <td>{{$loop->iteration }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->jadwal}}</td>
                        <td>{{ $item->jam_operasi}}</td>
                        <td>{{ $item->jam_akhir_operasi}}</td>
                        <td>
                            <a href="{{ route('jadwal.edit',$item->id)}}" class="btn btn-info ">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('jadwal.destroy',$item->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger delete" id="deletedata">
                            <i class="fa fa-trash">
                                </i>
                            </button>
                            </form>
                            </td>
                 </tr>
                     @empty
            
                          <tr>
                             <td colspan="7" class="text-center">Data Kosong</td>
                         </tr>
                 
                        
                     @endforelse
                 </tbody>

            
            </table>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->


@endsection

@section('custom-script')
<script>
    console.log('Hai!');
</script>
@endsection
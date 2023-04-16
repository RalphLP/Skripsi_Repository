{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="col-12">
  <div class="card">
    <div class="card-header">
      <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
              <a href="{!! url('/repository-view'); !!}" class="alert alert-primary solid alert-square mr-3"><strong>+ Tambah Data</strong></a>
              <div class="alert alert-primary alert-dismissible fade show">
                  <h6 class="mb-0"><strong>i</strong> Informasi</h6>
                  <p class="mb-0 small">Setiap Mahasiswa hanya dapat menginput 1 data skripsi</p>
              </div>
          </div>
      </div>
  </div>
  
    
    <div class="card-body">
      <div class="table-responsive">
        <table id="example3" class="display min-w850">
          <thead>
            <tr>
              <th></th>
              <th>Name</th>
              <th>NIM</th>
              <th>Judul Skripsi</th>
              <th>Pembimbing 1</th>
              <th>Pembimbing 2</th>
              <th>Diupdate</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/1.png') }}" alt=""></td>
                <td>{{ $post->relationToUser->name}}</td>
                <td>{{ $post->relationToUser->nim}}</td>
                <td>{{ $post->judul_skripsi}}</td>
                <td>{{ $post->pa1 }}</td>
                <td>{{ $post->pa2 }}</td>
                <td><a href="{{ route('repository.download', $post->id) }}" class="btn btn-primary btn-sm">Unduh</a></td>
                <td>
                    <div class="d-flex sweetalert">
                        <a href="{{ url('/penugasan-edit', $post->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1 btn sweet-confirm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ url('/penugasan-hapus', $post->id) }}" class="btn btn-danger shadow btn-xs sharp btn sweet-confirm1"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        
        </table>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.14.0/dist/sweetalert2.min.js"></script>
@if(Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ Session::get('success') }}'
        });
    </script>
@endif


@endsection
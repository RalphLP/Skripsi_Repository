{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="col-12">
  <div class="card">
    
  
    
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
                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                <td>{{ $post->pa1 }}</td>
                <td>{{ $post->judul_skripsi }}</td>
                <td>{{ $post->pa1 }}</td>
                <td>{{ $post->pa2 }}</td>
                <td>{{ $post->judul_skripsi }}</td>
                <td>{{ $post->judul_skripsi }}</td>
                <td>
                  <div class="d-flex sweetalert">
                      <a href="{!! url('/penugasan-edit'); !!}/{{ $post->id }}" class="btn btn-primary shadow btn-xs sharp mr-1 btn sweet-confirm"><i class="fa fa-pencil"></i></a>
                      <a href="{!! url('/penugasan-hapus'); !!}/{{ $post->id }}" class="btn btn-danger shadow btn-xs sharp btn sweet-confirm1"><i class="fa fa-trash"></i></a>
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


@endsection
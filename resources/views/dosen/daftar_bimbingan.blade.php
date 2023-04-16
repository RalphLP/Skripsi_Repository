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
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/1.png') }}" alt=""></td>
                <td>{{ $post->relationToUser->name }}</td>
                <td>{{ $post->relationToUser->nim  }}</td>
                <td>{{ $post->judul_skripsi }}</td>
                <td>{{ $post->pa1 }}</td>
                <td>{{ $post->pa2 }}</td>
                <td><a href="{{ route('repository.download', $post->id) }}" class="btn btn-primary btn-sm">Unduh</a></td>
                <td>
                  <div class="d-flex sweetalert">
                      <a href="{!! url('/detail-data1'); !!}/{{ $post->id }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                      
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
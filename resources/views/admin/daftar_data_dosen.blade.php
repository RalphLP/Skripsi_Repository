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
              <th>NIP</th>
              <th>Alamat</th>
              <th>Angkatan</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/2.png') }}" alt=""></td>
                <td>{{ $post->name}}</td>
                <td>{{ $post->nip}}</td>
                <td>{{ $post->alamat}}</td>
                <td>{{ $post->role }}</td>
                <td>{{ $post->role }}</td>
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


@endsection
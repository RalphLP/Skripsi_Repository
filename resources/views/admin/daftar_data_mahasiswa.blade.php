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
              <th>Alamat</th>
             
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/1.png') }}" alt=""></td>
                <td>{{ $post->name}}</td>
                <td>{{ $post->nim}}</td>
                <td>{{ $post->alamat}}</td>
               
                <td>{{ $post->role }}</td>
                <td>
                    <div class="d-flex sweetalert">
                        <a href="{{ url('/detail-datamahasiswa', $post->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1 btn sweet-confirm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ url('/detail-datadosen', $post->id) }}" class="btn btn-danger shadow btn-xs sharp btn sweet-confirm1"><i class="fa fa-trash"></i></a>
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
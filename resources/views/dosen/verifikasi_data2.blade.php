{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  
  <!-- row -->
  
    
      <div class="card">
        
        
        
        
          <div class="form-validation">
            <div class="card-body">
            <form action="/verifikasi-data1/{{$post->id}}" method="post" enctype="multipart/form-data" onsubmit="return submitForm(this);">
                @method('put')  
              @csrf
              
              <div class="form-group row">
                  <label for="nama" class="col-lg-4 col-form-label"><strong>Nama</strong></label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control text-black" id="nama" name="nama" value="{{ $post->name}}" readonly>
                  </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-lg-4 col-form-label"><strong>NIM</strong></label>
                <div class="col-lg-8">
                    <input type="text" class="form-control text-black" id="nim" name="nim" value="{{ $post->nip}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-lg-4 col-form-label"><strong>Email</strong></label>
                <div class="col-lg-8">
                    <input type="text" class="form-control text-black" id="nim" name="email" value="{{ $post->email}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-lg-4 col-form-label"><strong>Password</strong></label>
                <div class="col-lg-8">
                    <input type="text" class="form-control text-black" id="password" name="nama" value="{{ $post->password}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-lg-4 col-form-label"><strong>Alamat</strong></label>
                <div class="col-lg-8">
                    <input type="text" class="form-control text-black" id="alamat" name="nama" value="{{ $post->alamat}}" readonly>
                </div>
            </div>
              
              
            
            
                
                
            
            <div class="form-group row justify-content-end">
                <div class="card-body ">
                    <div class="form-row justify-content-center sweetalert">
                        {{--  <button type="submit" class="btn btn-primary"> Submit </button>--}}
                        
                        <a href="{{route('update.status', [$post->id, 'Verifikasi'])}}" class="btn btn-success col-md-3">Verifikasi</a>
                        
                    </div>
                </div>
            </div>
            
          
                  
                
                
                 
                  
              
                </form>
            </div>
         
       
          </div>
      </div>
    
  
</div>
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
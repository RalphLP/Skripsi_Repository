{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  
  <!-- row -->
  
    
      <div class="card">
        
        
        
        
          <div class="form-validation">
            <div class="card-body">
            <form action="/detail-data1/{{$post->id}}" method="post" enctype="multipart/form-data" onsubmit="return submitForm(this);">
                @method('put')  
              @csrf
              
              <div class="form-group row">
                <label for="nama" class="col-lg-4 col-form-label"><strong>Nama</strong></label>
                <div class="col-lg-8">
                    <input type="text" class="form-control text-black" id="nama" name="name" value="{{ $post->name}}" readonly>
                </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-lg-4 col-form-label"><strong>NIM</strong></label>
              <div class="col-lg-8">
                  <input type="text" class="form-control text-black" id="nim" name="nim" value="{{ $post->nim}}" readonly>
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
                  <input type="text" class="form-control text-black" id="password" name="password" value="{{ $post->password}}" readonly>
              </div>
          </div>
          <div class="form-group row">
              <label for="nama" class="col-lg-4 col-form-label"><strong>Alamat</strong></label>
              <div class="col-lg-8">
                  <input type="text" class="form-control text-black" id="alamat" name="alamat" value="{{ $post->alamat}}" readonly>
              </div>
          </div>
            
                
                
            
            <div class="form-group row justify-content-end">
              <div class="col-lg-8 ml-auto text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          
          
                  
                
                
                  <script>
                    // Menangkap elemen select pembimbing 1 dan pembimbing 2
                    var selectPA1 = document.querySelector('select[name="pa1"]');
                    var selectPA2 = document.querySelector('select[name="pa2"]');
                  
                    // Ketika nilai pada select pembimbing 1 berubah
                    selectPA1.addEventListener('change', function() {
                      // Mendapatkan nilai yang dipilih pada select pembimbing 1
                      var selectedPA1 = selectPA1.value;
                  
                     // Menghapus nama yang sama pada select pembimbing 2
                    for (var i = 0; i < selectPA2.options.length; i++) {
                    if (selectPA2.options[i].value === selectedPA1) {
                        selectPA2.remove(i);
                    }
                    }

                    });
                  </script>
                  
              
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
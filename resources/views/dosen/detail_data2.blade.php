{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  
  <!-- row -->
  
    
      <div class="card">
        
        
        
        
          <div class="form-validation">
            <div class="card-body">
            <form action="/detail-data2/{{$post->id}}" method="post" enctype="multipart/form-data" onsubmit="return submitForm(this);">
                @method('put')  
              @csrf
              
              <div class="form-group row">
                  <label for="nama" class="col-lg-4 col-form-label"><strong>Nama</strong></label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control text-black" id="nama" name="nama" value="{{ $post->relationToUser->name}}" readonly>
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="nim" class="col-lg-4 col-form-label"><strong>NIM</strong></label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control text-black" id="nim" name="nim" value="{{ $post->relationToUser->nim}}" readonly>
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="judul_skripsi" class="col-lg-4 col-form-label"><strong>Judul Skripsi</strong></label>
                  <input type="hidden" name="id_user" value="{{ $post->id_user }}">
                  <div class="col-lg-8">
                      <input type="text" class="form-control text-black" id="judul_skripsi" name="judul_skripsi" value="{{ $post->judul_skripsi }}">
                  </div>
              </div>
              
              <div class="form-group row">
                <label for="abstrak" class="col-lg-4 col-form-label"><strong>Abstrak</strong></label>
                <div class="col-lg-8"><input type="hidden" name="id_user" value="{{auth()->user()->id}}">
                    <div class="form-group">
                        <textarea id="abstrak" name="abstrak" class="form-control text-black" rows="6">{{ $post->abstrak }}</textarea>
                    </div>
                </div>
            </div>
            
              
            <div class="form-group row">
                <label for="sk" class="col-lg-4 col-form-label"><strong>SK Pembimbing Skripsi</strong></label>
                <div class="col-lg-8">
                    <input type="file" class="form-control-file text-black" id="sk" name="sk">
                    @if($post->sk != null)
                        <a href="{{ asset('storage/' . $post->sk) }}" target="_blank">{{ $post->sk }}</a>
                    @endif
                </div>
            </div>
            
              

                  
              <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-username"><strong>Pembimbing 1</strong></label>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="pa1" class="form-control form-control-lg default-select">
                            @foreach ($users as $name)
                                @if ($name->name == $post->pa1)
                                    <option value="{{ $name->name }}" selected>{{ $name->name }}</option>
                                @else
                                    <option value="{{ $name->name }}">{{ $name->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
                
            <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="val-username"><strong>Pembimbing 1</strong></label>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select name="pa2" class="form-control form-control-lg default-select">
                            @foreach ($users as $name)
                                @if ($name->name == $post->pa2)
                                    <option value="{{ $name->name }}" selected>{{ $name->name }}</option>
                                @else
                                    <option value="{{ $name->name }}">{{ $name->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
                
                
            @if(Auth::user()->id == $post->id_user)
            <div class="form-group row justify-content-end">
              <div class="col-lg-8 ml-auto text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          @endif
          
                  
                
                
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
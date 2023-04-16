{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
<div class="col-md-6">
        
  <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                      <a href="{!! url('/index'); !!}"><img src="{{ asset('images/logo-fullAI.png') }}" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                    
                    
                    <form action="{{ route('register.post') }}" method="POST">
                            @method('post')
                            @csrf
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Nama Lengkap</strong></label>
                            <input name="name" type="text" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Alamat</strong></label>
                            <input name="alamat" type="text" class="form-control" placeholder="hello@example.com">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Email</strong></label>
                            <input name="email" type="email" class="form-control" placeholder="hello@example.com">
                        </div>

                        <div class="form-group">
                            <label class="mb-1 text-white" for="role"><strong>Role:</strong></label>
                            <select name="role" class="form-control" id="role" onchange="showForm()">
                                <option value="">-- Pilih Role --</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Dosen">Dosen</option>
                            </select>
                        </div>
                        
                        <div id="nim" style="display:none">
                            <div class="form-group">
                                <label class="mb-1 text-white" for="nim"><strong>NIM:</strong></label>
                                <input type="text" class="form-control" id="nim" name="nim">
                            </div>
                        </div>
                        
                        <div id="nip" style="display:none">
                            <div class="form-group">
                                <label class="mb-1 text-white" for="nip"><strong>NIP:</strong></label>
                                <input type="text" class="form-control" id="nip" name="nip">
                            </div>
                        </div>
                        <script>
                            function showForm() {
                                var role = document.getElementById("role").value;
                                if (role == "Mahasiswa") {
                                    document.getElementById("nim").style.display = "block";
                                    document.getElementById("nip").style.display = "none";
                                } else if (role == "Dosen") {
                                    document.getElementById("nip").style.display = "block";
                                    document.getElementById("nim").style.display = "none";
                                } else {
                                    document.getElementById("nim").style.display = "none";
                                    document.getElementById("nip").style.display = "none";
                                }
                            }
                        </script>

                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Password</strong></label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
                        </div>
                </form>
                    <div class="new-account mt-3">
                        <p class="text-white">Already have an account? <a class="text-white" href="{!! url('/login-index'); !!}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
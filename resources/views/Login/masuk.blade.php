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
                  <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                  <form action="{{ route('login.post') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="mb-1 text-white"><strong>Email</strong></label>
                        <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                    </div>
                    <div class="form-group">
                        <label class="mb-1 text-white"><strong>Password</strong></label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label class="mb-1 text-white" for="role"><strong>Role:</strong></label>
                        <select name="role" class="form-control" id="role" onchange="showForm()" name="role">
                            <option value="">-- Login Sebagai --</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox ml-1 text-white">
                                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1" name="remember">
                                <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <a class="text-white" href="{!! url('/page-forgot-password'); !!}">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                    </div>
                </form>
                
                  <div class="new-account mt-3">
                      <p class="text-white">Don't have an account? <a class="text-white" href="{!! url('/register-index'); !!}" >Sign up</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
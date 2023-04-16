<!--**********************************
  Sidebar start
***********************************-->
<div class="deznav">
  <div class="deznav-scroll">
    <ul class="metismenu" id="menu">
      <li><a href="{!! url('/dashbaord'); !!}" class="ai-icon" aria-expanded="false">
        <i class="flaticon-381-networking"></i>
        <span class="nav-text">Dashboard</span>
      </a>
      </li>
      @if(Auth::user()->role =='Mahasiswa' || Auth::user()->role == 'Admin')
      <li><a href="{!! url('/repository-daftar'); !!}" class="ai-icon" aria-expanded="false">
        <i class="flaticon-381-book"></i>
        <span class="nav-text">Daftar Repository</span>
      </a>
      </li>
      @endif

      @if(Auth::user()->role =='Admin' || Auth::user()->role == 'Dosen')
      <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-381-id-card-1"></i>
        <span class="nav-text">Daftar Bimbingan</span>
      </a>
      <ul aria-expanded="false">
        <li><a href="{!! url('/daftar-bimbingan'); !!}">Mahasiswa Bimbingan 1</a></li>
        <li><a href="{!! url('/daftar-bimbingan2'); !!}">Mahasiswa Bimbingan 2</a></li>
      </ul>
      </li>
      @endif


      @if(Auth::user()->role =='Admin')
      <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-381-user-9"></i>
        <span class="nav-text">Data User</span>
      </a>
      <ul aria-expanded="false">
        <li><a href="{!! url('/daftar-mahasiswa'); !!}">Data Mahasiswa</a></li>
        <li><a href="{!! url('/daftar-dosen'); !!}">Data Dosen</a></li>
      </ul>
      </li>
      @endif

      
    </ul>
    <div class="add-menu-sidebar">
      <img src="{{ asset('images/skripsi8.png') }}" alt="" class="mr-3">
      <p class="	font-w500 mb-0">Repository Teknik Informatika</p>
    </div>
   
  </div>
</div>
<!--**********************************
  Sidebar end
***********************************-->
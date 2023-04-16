{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  
    
      <div class="row">
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-success mr-md-4 mr-3">
                  <svg width="60" height="60" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.1,24.8a17.4,17.4,0,0,1-.5-2.2c-.1-.5-.3-.6-.8-.5l-8,2c-.4.1-.5.3-.5.8a18.9,18.9,0,0,1,.5,2.3c.1.5.3.6.8.5l7.9-2,.6-.3,1.3.9a.2.2,0,0,1,.2.2c.2.6.3,1.2.5,1.9L12.4,31.1,7.5,10.2l7.6-1.5a9.4,9.4,0,0,0,.4,1.6c.1.7.3,1.3.4,2a.8.8,0,0,0,.5.5c.3,0,.4-.1.5-.4a8.3,8.3,0,0,0,.7-1.3l1,.9c.2.2.4.4.6.2s.3-.4.3-.7-.5-2.3-.8-3.6l.9-.2A11.6,11.6,0,0,1,20,9.5c.6,2.5,1.1,5.1,1.7,7.7,0,.2,0,.3-.2.4l-2.1.9c-.2.1-.4.2-.4.5a.7.7,0,0,0,.4.5l2.4,1c.2.1.3.2.3.4v3.9Zm-9.8-7.9a3.1,3.1,0,1,0,3.1-3.1A3.1,3.1,0,0,0,12.3,16.9Z" fill="#27BC48"/>
<path d="M20.8,19l4.5-2,2.3-1h.3l6.6,2.9h.1a.9.9,0,0,0-.1.5v1.1a1.2,1.2,0,0,0,.3,1,1,1,0,0,1-.2,1.3.6.6,0,0,0-.1.4v1.4H33.4a5.7,5.7,0,0,0,0-1.3c0-.2,0-.4-.2-.5a1,1,0,0,1,.1-1.5c.1-.1.1-.2.1-.4V19.5L31,20.6l-3,1.3a.3.3,0,0,1-.4,0L21,19.1C21,19,20.9,19,20.8,19Z" fill="#27BC48"/>
<path d="M23.1,21.1l.4.2L27.4,23a.8.8,0,0,0,.7,0l4-1.7.3-.2v3.6c0,.1-.1.3-.2.3a7,7,0,0,1-3.4,1.2,11.8,11.8,0,0,1-4.2-.5L23.3,25a.2.2,0,0,1-.2-.2Z" fill="#27BC48"/>
<path d="M6.5,10.5l4.9,20.8a1.2,1.2,0,0,1-1.5-.9c-.2-.8-.3-1.6-.5-2.4C8.1,22.7,6.9,17.3,5.7,11.9A1,1,0,0,1,6.5,10.5Z" fill="#27BC48"/>
<path d="M20.7,23.2l.3,1.6-7.3,1.8L13.4,25Z" fill="#27BC48"/>
<path d="M16.6,10.7l-.5-2.2,1.6-.4.4,2c-.3-.2-.6-.6-.9-.3Z" fill="#27BC48"/>
<path d="M17.5,16.9a2.1,2.1,0,0,1-4.2,0,2.2,2.2,0,0,1,2.1-2A2.1,2.1,0,0,1,17.5,16.9Z" fill="#27BC48"/></svg>
                  </svg>
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Total Skripsi</p>
                  <span class="title text-black font-w600">{{ $totalSkripsi }}</span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-success" style="width: 80%; height:5px;" role="progressbar">
                  <span class="sr-only">42% Complete</span>
                </div>
              </div>
            </div>
            <div class="effect bg-success"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-secondary  mr-md-4 mr-3">
                  <svg width="65" height="65" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.1,10.6a28.1,28.1,0,0,0,.1,2.9,1.1,1.1,0,0,0,.3.7,1.2,1.2,0,0,1,.4,1.4,4.4,4.4,0,0,1-1,2.2c-.7.7-1.1,1.6-1.7,2.3s-3.8,2.2-5.3.1-1.5-1.9-2.1-2.9a5.5,5.5,0,0,1-.6-2.2.4.4,0,0,1,.1-.5c1-.7.6-1.7.7-2.6V10.6l2.4.6a5.6,5.6,0,0,0,4.4,0A15.5,15.5,0,0,1,25.1,10.6Z" fill="#A02CFA"/>
                    <path d="M29.8,26.9H11.3a11.2,11.2,0,0,1,.9-2.2,3,3,0,0,1,1.4-1.1c1.6-.7,3.3-1.2,4.9-1.8h.4a3.8,3.8,0,0,0,3.3,0h.4l5,1.8A3.3,3.3,0,0,1,29,24.8,13.1,13.1,0,0,1,29.8,26.9Z" fill="#A02CFA"/>
                    <path d="M12.5,9l2.6-.9,2.9-1a5.3,5.3,0,0,1,5.2,0c1.7.7,3.5,1.3,5.4,1.9l-7,2a3.8,3.8,0,0,1-2.1,0Z" fill="#A02CFA"/>
                    <path d="M12.7,12.4l.5,1.6H12l.5-1.6Z" fill="#A02CFA"/>
                    <path d="M12.5,12.2V9.4h.2v2.8Z" fill="#A02CFA"/>
                  </svg>
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Total Mahasiswa</p>
                  <span class="title text-black font-w600">{{ $totalMahasiswa }}</span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-secondary" style="width: 82%; height:5px;" role="progressbar">
                  <span class="sr-only">42% Complete</span>
                </div>
              </div>
            </div>
            <div class="effect bg-secondary"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-danger mr-md-4 mr-3">
                  <svg width="60" height="60" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.4,7.5H27.8V27.7H11.4Zm14.4,8.3-.3-.3-5.3-1.8a1.2,1.2,0,0,0-.8.1L15,15.3c-.7.2-.8.5-.9,1.2s.5,2.8-.4,4.1v1.2c0,.3-.1.6-.1.9H15v-2a.5.5,0,0,0-.2-.4,1.9,1.9,0,0,1-.2-.7,13.3,13.3,0,0,1,0-2V16.1l.7.2a.9.9,0,0,1,.8,1.1,14.7,14.7,0,0,0,0,2.1c0,.4.1.6.5.7a15.1,15.1,0,0,0,6.7,0c.4-.1.5-.3.5-.7V17c0-.2.2-.5.4-.5Z" fill="#FF3282"/>
<path d="M27.8,28.1a5.3,5.3,0,0,0,0,3.9H11a1.9,1.9,0,0,1-2.1-2,2,2,0,0,1,2.1-2H27.8ZM18,29.5c-.9-.5-5.9-.4-6.3,0ZM24.9,31c-.6-.4-8.4-.4-8.9,0Zm-5.2-1.8c.5.5,4.9.4,5.3,0Zm-7.9,1.5v.2h3.4v-.2Z" fill="#FF3282"/>
<path d="M10.9,27.6l-2,.9a4.3,4.3,0,0,1-.1-.5V10a2.2,2.2,0,0,1,2.1-2.5Z" fill="#FF3282"/>
<path d="M30.7,28H29.5V12.8h1.2Z" transform="translate(-8.8 -7.5)"/><path class="cls-1" d="M32.4,28H31.2V12.8h1.2Z" fill="#FF3282"/>
<path d="M29.5,28.4h2.9a10.8,10.8,0,0,1,0,1.8.8.8,0,0,1-.4.4H30a.6.6,0,0,1-.5-.5A9.6,9.6,0,0,1,29.5,28.4Z" fill="#FF3282"/>
<path d="M32.3,12.4H29.6L31,9.2Z" fill="#FF3282"/>
<path d="M23.4,16.7v3a11.6,11.6,0,0,1-6.9,0v-3l2.7,1a2.2,2.2,0,0,0,1.4,0Z" fill="#FF3282"/>
<path d="M15.9,15.9h4.6s0-.5-.1-.6h-.9l-.9.2a12.2,12.2,0,0,1-2.7-.1l3.9-1.3h.3l4.8,1.6L20,17.4c0,.1-.2,0-.3,0l-3.8-1.3Z" transform="translate(-8.8 -7.5)"/><path class="cls-1" d="M14.5,21.4l.2.9H14l.3-1Z" fill="#FF3282"/></svg>
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Total Proposal  </p>
                  <span class="title text-black font-w600">{{ $totalSkripsi }}</span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-danger" style="width: 90%; height:5px;" role="progressbar">
                  <span class="sr-only">42% Complete</span>
                </div>
              </div>
            </div>
            <div class="effect bg-danger"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-warning  mr-md-4 mr-3">
                  <svg width="80" height="80" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.6,16.5a3.4,3.4,0,0,1-3.4,3.4,3.5,3.5,0,0,1-3.5-3.5,3.5,3.5,0,1,1,6.9.1Z" fill="#FFBC11"/>
                    <path d="M20.7,27.7a8.3,8.3,0,0,0,.7-1.3L24,21.1c.1-.1.1-.2.3-.2h1.3a1.9,1.9,0,0,1,1.6,1.9v2.9a1.9,1.9,0,0,1-2,1.9H20.7Z" fill="#FFBC11"/>
                    <path d="M19.7,27.7H15.2a1.8,1.8,0,0,1-1.9-1.5V22.9a1.9,1.9,0,0,1,2-2h1c1.1,2.2,2.2,4.5,3.4,6.7Z" fill="#FFBC11"/>
                    <path d="M20.2,26.2l-1.6-3.3,1.6-1.4.3.3,1.2,1c0,.1.1.1,0,.2l-1.5,3.2Z" fill="#FFBC11"/>
                  </svg>
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Total Dosen</p>
                  <span class="title text-black font-w600">{{ $totalDosen }}</span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-warning" style="width: 42%; height:5px;" role="progressbar">
                  <span class="sr-only">42% Complete</span>
                </div>
              </div>
            </div>
            <div class="effect bg-warning"></div>
          </div>
        </div>
      </div>
    
    
    
      <div class="row">
        <div class="col-xl-12">	
          <div class="card">
            <div class="card-header d-sm-flex d-block pb-0 border-0">
              <div class="mr-auto pr-3">
                <h4 class="text-black font-w600 fs-20">Dosen Teknik Informatika</h4>
                <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
              </div>
              
            </div>
            <div class="card-body pt-2">
              <div class="testimonial-one owl-carousel">
                <div class="items">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="{{ asset('images/testimonial/Layer1.png') }}" alt="">
                      <h5 class="fs-16 font-w500 mb-1"><a href="{!! url('/app-profile'); !!}" class="text-black">Gladly C. Rorimpandey ST. MISD</a></h5>
                      <p class="fs-14">gladlyrorimpandey@unima.ac.id</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"/>
                        </svg>
                        <span class="fs-14 d-block ml-2 pr-2 mr-2 border-right text-black font-w500">No.HP</span>
                        <a href="{!! url('/app-profile'); !!}" class="btn-link fs-14">081317720783</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="items">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="{{ asset('images/testimonial/Layer 2.png') }}" alt="">
                      <h5 class="fs-16 font-w500 mb-1"><a href="{!! url('/app-profile'); !!}" class="text-black">Vivi P. Rantung, ST. MISD</a></h5>
                      <p class="fs-14">vivirantung@unima.ac.id</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"/>
                        </svg>
                        <span class="fs-14 d-block ml-2 pr-2 mr-2 border-right text-black font-w500">No.HP</span>
                        <a href="{!! url('/app-profile'); !!}" class="btn-link fs-14">081317720783</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="items">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="{{ asset('images/testimonial/Layer 3.png') }}" alt="">
                      <h5 class="fs-16 font-w500 mb-1"><a href="{!! url('/app-profile'); !!}" class="text-black">Olivia Kembuan, S.Kom, M.Eng</a></h5>
                      <p class="fs-14">oliviakembuan@unima.ac.id</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"/>
                        </svg>
                        <span class="fs-14 d-block ml-2 pr-2 mr-2 border-right text-black font-w500">No.HP</span>
                        <a href="javascript:void(0)" class="btn-link fs-14">081317720783</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="items">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="{{ asset('images/testimonial/Layer 4.png') }}" alt="">
                      <h5 class="fs-16 font-w500 mb-1"><a href="{!! url('/app-profile'); !!}" class="text-black">Sondy Kumajas, ST, MT</a></h5>
                      <p class="fs-14">sondykumajas@unima.ac.id</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"/>
                        </svg>
                        <span class="fs-14 d-block ml-2 pr-2 mr-2 border-right text-black font-w500">No.HP</span>
                        <a href="{!! url('/app-profile'); !!}" class="btn-link fs-14">081317720783</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="items">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="{{ asset('images/testimonial/Layer 5.png') }}" alt="">
                      <h5 class="fs-16 font-w500 mb-1"><a href="{!! url('/app-profile'); !!}" class="text-black">Quido C. Kainde, ST, MT </a></h5>
                      <p class="fs-14">quidokainde@unima.ac.id</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"/>
                        </svg>
                        <span class="fs-14 d-block ml-2 pr-2 mr-2 border-right text-black font-w500">No.HP</span>
                        <a href="{!! url('/app-profile'); !!}" class="btn-link fs-14">081317720783</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    
    
  
</div>

@endsection			
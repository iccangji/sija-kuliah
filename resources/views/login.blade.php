@extends('layouts/login')

@section('container')

<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
    <div class="card card-plain mt-8">
      <div class="card-header pb-0 text-left bg-transparent">
        <h4 class="font-weight-bolder text-info">Sistem Informasi<br>Jadwal Perkuliahan<br>Teknik Informatika UHO</h4>
      </div>
      <div class="card-body">
        @if (session()->has('loginError'))
          <div class="alert bg-gradient-danger alert-dismissible fade show mt-2" role="alert">
              <span style="color: white">{{ session('loginError') }}</span>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <i class="fa fa-close cursor-pointer"></i>
              </button>
          </div>
        @endif
        <form role="form" action="/login" method="POST" id="login-form">
        @csrf
          <label for="floatingInput">NIDN</label>
          <div class="mb-3">
            <input type="text" name="user" class="form-control" id="floatingInput" placeholder="NIDN" aria-label="nidn" aria-describedby="email-addon" required>
          </div>
          <label for="floatingPassword">Password</label>
          <div class="mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" name="rememberMe" type="checkbox" id="rememberMe" value="1" checked="">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
          <div class="text-center">
            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
          </div>
        </form>
      </div>
      <div class="card-footer text-center pt-0 px-lg-2 px-1">
        <p class="mb-4 text-sm mx-auto">
          {{-- Don't have an account?
          <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a> --}}
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
      <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
    </div>
  </div>
@endsection
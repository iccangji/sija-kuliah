@extends('layouts.main')

@section('container')

@if (session()->has('error'))
<div class="alert bg-danger p-0 px-2 py-0 text-white bg-opacity-25 alert-dismissible fade show d-flex align-items-center"role="alert">
  <div class="text-sm flex-grow-1">{{session('error')}}</div>
  <button type="button" class="btn btn-outline-light mt-3 p-2" data-bs-dismiss="alert" aria-label="Close">
    <i class="fa fa-times" aria-hidden="true"></i>
  </button>
</div>  
@endif
<div class="card mb-4 d-flex w-100 align-items-center card mb-4 d-flex justify-content-center">
  <div class="daily-schedule w-100">
    <div class="card-header pb-0 align-items-top">
      <div class="p-2 flex-grow-1">
        <a class="nav-link d-flex align-items-center" href="{{$back}}">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
          <div class="text-sm ms-3">Kembali</div>
        </a>
      </div>
    </div>
    <div class="container mt-4">
      <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="formFile" class="form-label">File</label>
          <input class="form-control" type="file" id="formFile" name="file" required>
        </div>
        <div class="form-check form-switch">
          <input class="form-check-input" name="delete-data" type="checkbox" id="delete-data" value="1">
          <label class="form-check-label" for="delete-data">Hapus data sebelumnya</label>
        </div>
        <button class="btn btn-primary w-100 mt-2">Unggah</button>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection
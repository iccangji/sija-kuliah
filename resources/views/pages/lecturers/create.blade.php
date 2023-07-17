@extends('layouts.main')

@section('container')

@error('kode')
<div class="alert bg-danger p-0 px-2 py-0 text-white bg-opacity-25 alert-dismissible fade show d-flex align-items-center"role="alert">
  <div class="text-sm flex-grow-1">Kode telah digunakan</div>
  <button type="button" class="btn btn-outline-light mt-3 p-2" data-bs-dismiss="alert" aria-label="Close">
    <i class="fa fa-times" aria-hidden="true"></i>
  </button>
</div>  
@enderror
<div class="card mb-4 d-flex w-100 align-items-center card mb-4 d-flex justify-content-center">
  <div class="daily-schedule w-100">
    <div class="card-header pb-0 align-items-top">
      <div class="p-2 flex-grow-1">
        <a class="nav-link d-flex align-items-center" href="/mata-kuliah">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
          <div class="text-sm ms-3">Kembali</div>
        </a>
      </div>
    </div>
    <div class="container mt-4">
      <form action="" method="post">
        @csrf
        <div class="form-floating mb-3">
          <input name="nidn" type="text" class="form-control" id="floatingInput" placeholder="Mahasiswa" required>
          <label for="floatingInput">NIDN</label>
        </div>
        <div class="form-floating mb-3">
          <input name="nama" type="text" class="form-control" id="floatingInput" placeholder="Mahasiswa" required>
          <label for="floatingInput">Nama</label>
        </div>
        <button class="btn btn-primary w-100 mt-2">Tambah Pengajar</button>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('layouts.main')

@section('container')

@if (session()->has('errorMsg'))
<div class="alert bg-danger p-0 px-2 py-0 text-white bg-opacity-25 alert-dismissible fade show d-flex align-items-center"role="alert">
  <div class="text-sm flex-grow-1">{{session('errorMsg')}}</div>
  <button type="button" class="btn btn-outline-light mt-3 p-2" data-bs-dismiss="alert" aria-label="Close">
    <i class="fa fa-times" aria-hidden="true"></i>
  </button>
</div>  
@endif
<div class="card mb-4 d-flex w-100 align-items-center card mb-4 d-flex justify-content-center">
  <div class="daily-schedule w-100">
    <div class="card-header pb-0 align-items-top">
      <div class="p-2 flex-grow-1">
        <a class="nav-link d-flex align-items-center" href="/">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
          <div class="text-sm ms-3">Kembali</div>
        </a>
      </div>
    </div>
    <div class="container mt-4">
      <form action="" method="post">
        @csrf
        <label for="course">Mata Kuliah</label>
        <select name="course" class="form-select mb-3" aria-label="Default select example" style="font-family: inherit" required>
          <option selected>Pilih Mata Kuliah</option>
          @foreach ($courses as $course)
            <option value="{{$course['kode']}}">{{$course['nama']}}</option>  
          @endforeach
        </select>
        <label for="room">Ruangan</label>
        <select name="room" class="form-select mb-3" aria-label="Default select example" style="font-family: inherit" required>
          <option selected>Pilih Ruangan</option>
          <option value="IT-1">IT-1</option>  
          <option value="IT-2">IT-2</option>  
          <option value="IT-3">IT-3</option>  
          <option value="LAB. RPL">LAB. RPL</option>  
          <option value="LAB. SI">LAB. SI</option>  
          <option value="LAB. MULTIMEDIA">LAB. MULTIMEDIA</option>
        </select>
        <label for="day">Hari</label>
        <select name="day" class="form-select mb-3" aria-label="Default select example" style="font-family: inherit" required>
          <option selected>Pilih Hari</option>
          <option value="1">Senin</option>  
          <option value="2">Selasa</option>  
          <option value="3">Rabu</option>  
          <option value="4">Kamis</option>  
          <option value="5">Jumat</option>
        </select>
        <div class="row">
          <div class="col-6">
            <div class="form-floating mb-3">
              <input name="time-start" type="time" class="form-control" id="floatingInput" placeholder="09:30" value="07:30" required>
              <label for="floatingInput">Jam Masuk</label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-floating mb-3">
              <input name="time-end" type="time" class="form-control" id="floatingInput" placeholder="09:30" value="08:20" required>
              <label for="floatingInput">Jam Keluar</label>
            </div>
          </div>
        </div>
        <div class="form-floating mb-3">
          <input name="students" type="text" class="form-control" id="floatingInput" placeholder="Mahasiswa" required>
          <label for="floatingInput">Angkatan / Semester / Jumlah</label>
        </div>
        <div class="form-floating mb-3">
          <input name="class" type="text" class="form-control" id="floatingInput" placeholder="Mahasiswa" required>
          <label for="floatingInput">Kelas</label>
        </div>
        <label for="lecturer1">Dosen 1</label>
        <select name="lecturer1" class="form-select mb-3" aria-label="Default select example" style="font-family: inherit" required>
          <option selected>Pilih Dosen 1</option>
          @foreach ($lecturers as $lecturer)
            <option value="{{$lecturer['nidn']}}">{{$lecturer['nama']}}</option>  
          @endforeach
        </select>
        <label for="lecturer2" for="">Dosen 2</label>
        <select name="lecturer2" class="form-select mb-3" aria-label="Default select example" style="font-family: inherit">
          <option selected>Pilih Dosen 2</option>
          @foreach ($lecturers as $lecturer)
            <option value="{{$lecturer['nidn']}}">{{$lecturer['nama']}}</option>  
          @endforeach
        </select>
        <label for="lecturer3">Dosen 3</label>
        <select name="lecturer3" class="form-select mb-3" aria-label="Default select example" style="font-family: inherit">
          <option selected>Pilih Dosen 3</option>
          @foreach ($lecturers as $lecturer)
            <option value="{{$lecturer['nidn']}}">{{$lecturer['nama']}}</option>  
          @endforeach
        </select>
        <button class="btn btn-primary w-100 mt-2">Tambah Jadwal</button>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('layouts.main')

@section('container')
@if (auth()->user()->level=='admin')
    @if (session()->has('success'))
    <div class="alert bg-info p-0 px-2 text-white bg-opacity-25 alert-dismissible fade show d-flex align-items-center"role="alert">
      <div class="text-sm flex-grow-1">{{session('success')}}</div>
      <button type="button" class="btn btn-outline-light mt-3 p-2" data-bs-dismiss="alert" aria-label="Close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
    </div>  
    @endif
    <div class="card daily-schedule w-100">
      <div class="card-header d-flex pb-0 align-items-top">
        <div class="p-2 flex-grow-1">
          <h6 class="my-0">Jadwal Perkuliahan</h6>
          <span class="mt-2 d-flex align-items-end">
            <a href="/tambah-jadwal">
              <button class="btn btn-primary py-2 px-3"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </a>
            <a href="/upload-jadwal">
              <button class="btn btn-info py-2 px-3 ms-3"><i class="fa fa-upload" aria-hidden="true"></i></button>
            </a>
          </span>
        </div>
        @if (auth()->user()->level=='admin')
          <div class="p-2">
            <form action="/cari-jadwal" method="post">
              @csrf
            <div class="input-group mb-3">
                <input type="text" name="search" @if (auth()->user()->level=='admin')
                    value="{{$query}}"
                @endif class="form-control p-2 py-1 h-100 border-end-0 rounded-end-0" placeholder="Cari jadwal..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-primary rounded-2 px-2 py-2 ms-2"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </form>
          </div>
        @endif
      </div>
      @if ($schedules)
        @foreach ($schedules as $schedule)
          @include('partials/all_schedule_item') 
        @endforeach
      @else
        <div class="text-md text-center my-4">Tidak ada jadwal</div>
      @endif
    </div>
  </div>
@else
<div class="collapse show" id="collapseExample">
  <div class="card mb-4 d-flex w-100 align-items-center card mb-4 d-flex justify-content-center">
    <div class="daily-schedule w-100">
      <div class="card-header pb-0">
        <h6 class="my-0" id="">Jadwal hari ini</h6>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="px-4 mt-1">
          @if ($today_schedule)
            <div class="text-md mb-2">{{$today_schedule[0]['hari']}}</div>
              @foreach ($today_schedule as $schedule)
                @include('partials/schedule_item') 
              @endforeach
            </div>
          @else
          <div class="text-md text-center my-4">Tidak ada jadwal hari ini</div>
          </div>
          @endif
        </div>
      </div>
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" id="collapse-btn" aria-expanded="false" aria-controls="collapseExample" onclick="scrollToTop()">
      Tampilkan semua jadwal
      </button>
  </div>
</div>
<div class="collapse" id="collapseExample">
  <div class="card mb-4 d-flex w-100 align-items-center card mb-4 d-flex justify-content-center">
    <div class="daily-schedule w-100">
      <div class="card-header pb-0">
        <h6 class="my-0">Jadwal Perkuliahan</h6>
      </div>
      @foreach ($all_schedule as $schedule)
        @include('partials/all_schedule_item') 
      @endforeach
    </div>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" onclick="scrollToTop()" data-bs-target="#collapseExample" id="collapse-btn" aria-expanded="false" aria-controls="collapseExample">
      Tampilkan jadwal hari ini
    </button>
  </div>
</div>
@endif

@endsection
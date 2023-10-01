@extends('layouts.main')

@section('container')
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
        @include('partials/guest_all_schedule_item') 
      @endforeach
    </div>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" onclick="scrollToTop()" data-bs-target="#collapseExample" id="collapse-btn" aria-expanded="false" aria-controls="collapseExample">
      Tampilkan jadwal hari ini
    </button>
  </div>
</div>
@endsection
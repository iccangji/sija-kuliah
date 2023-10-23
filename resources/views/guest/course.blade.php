@extends('layouts.main')

@section('container')
  <div class="card mb-4">
    <div class="d-flex mx-4 align-items-center">
      <div class="mt-4 flex-grow-1">
        <form action="/cari-mata-kuliah" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="search"
            value="{{$query}}"class="form-control p-2 h-100 border-end-0 rounded-end-0" placeholder="Cari jadwal..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-primary rounded-2 px-2 py-2 ms-2"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
      </div>
    </div>
    <div class="mt-1 mx-4 card-body px-0 pt-0 pb-2">
      <div class="p-0">
      @if ($courses)
        <table class="table table-striped align-items-center">
          <thead>
            <tr>
              <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" scope="col">
                <div class="text-start ms-2 text-wrap word-break">
                  #
                </div>
              </td>
              <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" scope="col">
                <div class="text-start text-wrap word-break">
                  Mata Kuliah
                </div>
              </td>
              <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" scope="col">
                <div class="text-start text-wrap word-break">
                  Kode
                </div>
              </td>
              <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" scope="col">
                <div class="text-start text-wrap word-break">
                  SKS
                </div>
              </td>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < count($courses); $i++)
              <tr>
                <td class="" scope="row">
                  <div class="ms-2 text-xs text-wrap word-break">{{$i+1}}</div>
                </td>
                <td>
                  <div class="text-xs text-wrap word-break">{{$courses[$i]['kode']}}</div>
                </td>
                <td>
                  <div class="text-xs text-wrap word-break font-weight-bold">{{$courses[$i]['nama']}}</div>
                </td>
                <td>
                  <div class="text-xs text-wrap word-break">{{$courses[$i]['sks']}}</div>
                </td>
            @endfor
          </tbody>
        </table>
      </div>
      @else
      <div class="text-md text-center my-4">Tidak ditemukan</div>
    @endif
    </div>
  </div>
@endsection
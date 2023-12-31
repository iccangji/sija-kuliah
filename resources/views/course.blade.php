@extends('layouts.main')

@section('container')
@if (session()->has('success'))
    <div class="alert bg-info p-0 px-2 text-white bg-opacity-25 alert-dismissible fade show d-flex align-items-center"role="alert">
      <div class="text-sm flex-grow-1">{{session('success')}}</div>
      <button type="button" class="btn btn-outline-light mt-3 p-2" data-bs-dismiss="alert" aria-label="Close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
    </div>
@endif
  <div class="card mb-4">
    <div class="d-flex mx-4 mt-4 align-items-center">
      <div class="p-2 flex-grow-1">
        @if (auth()->user()->level=='admin')
        <span class="mt-2 d-flex align-items-end">
          <a href="/tambah-mata-kuliah">
            <button class="btn btn-primary py-2 px-3"><i class="fa fa-plus" aria-hidden="true"></i></button>
          </a>
          <a href="/upload-mata-kuliah">
            <button class="btn btn-info py-2 px-3 ms-3"><i class="fa fa-upload" aria-hidden="true"></i></button>
          </a>
        </span>
        @endif
      </div>
      @if (auth()->user()->level=='admin')
      <div class="p-2">
        <form action="/cari-mata-kuliah" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="search"
            value="{{$query}}"class="form-control p-2 py-1 h-100 border-end-0 rounded-end-0" placeholder="Cari jadwal..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-primary rounded-2 px-2 py-2 ms-2"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
      </div>
      @endif
    </div>
    <div class="mt-2 mx-4 card-body px-0 pt-0 pb-2">
      <div class="p-0">
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
              @if (auth()->user()->level=='admin')
                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" scope="col">
                  <div class="text-start text-wrap">
                    Aksi
                  </div>
                </td>
              @endif
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
                @if (auth()->user()->level=='admin')
                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" scope="col">
                  <a href="/edit-mata-kuliah/{{$courses[$i]['id']}}">
                    <button class="btn btn-secondary p-2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                  </a>
                  <a href="/delete-mata-kuliah/{{$courses[$i]['id']}}">
                    <button class="btn btn-danger p-2 ms-1"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                  </a>
                </td>
              @endif
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
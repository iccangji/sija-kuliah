<div class="card bg-white mb-3 my-2 pt-2 mx-4">
  <div class="d-flex row m-0 py-0 align-items-center">
    <div class="d-flex p-0">
      <div class="p-1 px-3 flex-grow-1 mt-1">
        <h6 class="mb-0 text-sm text-dark">{{$schedule['matkul']}}</h6>
        <span class="text-sm">{{$schedule['hari']}}, {{$schedule['jam']}}</span>
      </div>
      @if (auth()->user()->level=='admin')
      <div class="p-1 px-3">
        <a href="/edit/{{$schedule['id']}}">
          <button class="btn btn-secondary p-2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
        </a>
        <a href="/delete/{{$schedule['id']}}">
          <button class="btn btn-danger p-2"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </a>
      </div>
      @endif
    </div>
  </div>
    <div class="no-shadow p-0 m-0">
      <table class="table table-striped table-borderless border-radius-sm p-0 table-responsive">
          <tbody>
            <tr>
              <td class="text-xs text-dark px-3">SKS</td>
              <td class="text-xs text-dark pe-4 text-bold text-end me-2 text-wrap">{{$schedule['sks']}}</td>
            </tr>
            <tr>
              <td class="text-xs text-dark px-3 text-wrap">Angkatan/Semester/Jumlah</td>
              <td class="text-xs text-dark pe-4 text-bold text-end me-2 text-wrap">{{$schedule['mahasiswa']}}</td>
            </tr>
            <tr>
              <td class="text-xs text-dark px-3">Kelas</td>
              <td class="text-xs text-dark pe-4 text-bold text-end me-2 text-wrap text-break">{{$schedule['kelas']}}</td>
            </tr>
            @if (auth()->user()->level=='admin')
              <tr>
                <td class="text-xs text-dark px-3">Dosen 1</td>
                <td class="text-xs text-dark pe-4 text-bold text-end me-2 text-wrap text-break">{{$schedule['dosen1']}}</td>
              </tr>
              @if ($schedule['dosen2']!=null)
              <tr>
                <td class="text-xs text-dark px-3">Dosen 2</td>
                <td class="text-xs text-dark pe-4 text-bold text-end me-2 text-wrap text-break">{{$schedule['dosen2']}}</td>
              </tr>
              @endif
              @if ($schedule['dosen3']!=null)
              <tr>
                <td class="text-xs text-dark px-3">Dosen 3</td>
                <td class="text-xs text-dark pe-4 text-bold text-end me-2 text-wrap text-break">{{$schedule['dosen3']}}</td>
              </tr>
              @endif
            @else
              <tr>
                <td class="text-xs text-dark px-3">Dosen lainnya</td>
                <td class="text-xs text-dark pe-4 text-bold text-end me-2 text-wrap">
                  {{implode(", ",$schedule['other_lecturer'])}}
                </td>
              </tr>
            @endif
          </tbody>
        </table>
    </div>
</div>
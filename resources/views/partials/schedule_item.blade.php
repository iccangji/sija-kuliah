<div class="card mb-3 my-2 pt-2 
  @if ($schedule['status'] == 'running') {{'bg-running'}} 
  @elseif ($schedule['status'] == 'not_running') {{'bg-unrunning'}} 
  @else {{'bg-completed'}}
  @endif">
  <div class="d-flex row m-0 py-0 align-items-center">
    <div class="d-flex p-0">
      <div class="p-1 px-3 flex-grow-1 mt-1">
        <h6 class="mb-0 text-sm text-dark">{{$schedule['matkul']}}</h6>
      </div>
      <div class="p-1 me-3 mb-2">
        <span class="badge bg-dark">{{$schedule['jam']}}</span>
      </div>
    </div>
  </div>
    <div class="no-shadow p-0 m-0">
      <table class="table
      @if ($schedule['status'] == 'running') {{'table-info'}} 
      @elseif ($schedule['status'] == 'completed') {{'table-secondary'}} 
      @else {{''}}
      @endif
      table-striped table-borderless border-radius-sm p-0 table-responsive">
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
            <tr>
              <td class="text-xs text-dark px-3">Dosen lainnya</td>
              <td class="text-xs text-dark pe-4 text-bold text-end me-2 text-wrap">
                {{implode($schedule['other_lecturer'])}}
              </td>
            </tr>
          </tbody>
        </table>
    </div>
</div>
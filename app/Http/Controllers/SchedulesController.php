<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use App\Http\Requests\StoreSchedulesRequest;
use App\Http\Requests\UpdateSchedulesRequest;
use App\Imports\ImportSchedules;
use App\Models\Courses;
use App\Models\Lecturers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $day= [
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    ];

    public function index()
    {   

        if(auth()->user()){
            if(auth()->user()->level=='admin'){
                $schedules = (Schedules::select(
                    'schedules.id',
                    'courses.nama as matkul',
                    'sks',
                    'hari',
                    'jam',
                    'kelas',
                    'ruang',
                    'mahasiswa',
                    'd1.nama as dosen1',
                    'd2.nama as dosen2',
                    'd3.nama as dosen3',
                )
                ->join('courses', 'schedules.kode', 'courses.kode')
                ->leftjoin('lecturers as d1', 'schedules.dosen1', 'd1.nidn')
                ->leftjoin('lecturers as d2', 'schedules.dosen2', 'd2.nidn')
                ->leftjoin('lecturers as d3', 'schedules.dosen3', 'd3.nidn')
                ->get()->toArray());
                usort($schedules, function($a, $b){
                    if ($a['hari'] === $b['hari']) {
                        return strcmp($a['jam'], $b['jam']);
                    }
                    return $a['hari'] - $b['hari'];
                });
                for($i=0;$i<count($schedules);$i++){
                    $schedules[$i]['hari'] = $this->day[$schedules[$i]['hari']];
                }
                
                return view('dashboard', [
                    'title' => 'Sistem Informasi Penjadwalan Kuliah | Dasbor',
                    'sidebar' => 'dasbor',
                    'header' => 'Jadwal Perkuliahan',
                    'user' => auth()->user()->name,
                    'schedules' => $schedules,
                    'query' => ''
                ] 
                );
            }
            else{
                date_default_timezone_set('Asia/Makassar');
                $day = (date('w'));
                $time = (floatval(date('H.i')));
                $timeNow = date('H:i');
    
                $allSchedule = (Schedules::select(
                    'courses.nama as matkul',
                    'sks',
                    'hari',
                    'jam',
                    'kelas',
                    'ruang',
                    'mahasiswa',
                    'd1.nama as dosen1',
                    'd2.nama as dosen2',
                    'd3.nama as dosen3',
                )
                ->join('courses', 'schedules.kode', 'courses.kode')
                ->leftjoin('lecturers as d1', 'schedules.dosen1', 'd1.nidn')
                ->leftjoin('lecturers as d2', 'schedules.dosen2', 'd2.nidn')
                ->leftjoin('lecturers as d3', 'schedules.dosen3', 'd3.nidn')
                ->where('dosen1', auth()->user()->user)
                ->orwhere('dosen2', auth()->user()->user)
                ->orwhere('dosen3', auth()->user()->user)
                ->get()->toArray());
    
                usort($allSchedule, function($a, $b){
                    if ($a['hari'] === $b['hari']) {
                        return strcmp($a['jam'], $b['jam']);
                    }
                    return $a['hari'] - $b['hari'];
                });
    
                $todaySchedule = [];
                for($i=0;$i<count($allSchedule);$i++){
                    $otherLecturer = [];
                    if($allSchedule[$i]['dosen1'] != auth()->user()->name){
                        $otherLecturer[] = $allSchedule[$i]['dosen1'];
                    }
                    if($allSchedule[$i]['dosen2']){
                        if($allSchedule[$i]['dosen2'] != auth()->user()->name){
                            $otherLecturer[] = $allSchedule[$i]['dosen2'];
                        }   
                    }
                    if($allSchedule[$i]['dosen3']){
                        if($allSchedule[$i]['dosen2'] != auth()->user()->name){
                            $otherLecturer[] = $allSchedule[$i]['dosen3'];
                        }   
                    }
                    $allSchedule[$i] += array('other_lecturer' => $otherLecturer);
                    $allSchedule[$i] += array('other_lecturer' => $otherLecturer);
                    if($allSchedule[$i]['hari'] == $day){
                        $allSchedule[$i]['hari'] = $this->day[$allSchedule[$i]['hari']];
                        $todaySchedule[] = $allSchedule[$i];
                    }else{
                        $allSchedule[$i]['hari'] = $this->day[$allSchedule[$i]['hari']];
                    }
                }
                if($todaySchedule){
                    for($i=0;$i<count($todaySchedule);$i++){
                        $timeStart = floatval(substr($todaySchedule[$i]['jam'], 0, 5));
                        $timeEnd = floatval(substr($todaySchedule[$i]['jam'], 6));
                        if ($time >= $timeStart && $time <= $timeEnd) {
                            $status = 'running';
                        } else if ($time <= $timeStart){
                            $status = 'not_running';
                        } else{
                            $status = 'passed';
                        }
                        $todaySchedule[$i] += array('status' => $status);
                    }
                }
                return view('dashboard', [
                    'title' => 'Sistem Informasi Penjadwalan Kuliah | Dasbor',
                    'sidebar' => 'dasbor',
                    'header' => 'Jadwal Perkuliahan',
                    'user' => auth()->user()->name,
                    'today_schedule' => $todaySchedule,
                    'all_schedule' => $allSchedule,
                ] 
                );
            }
        }
        else{
            date_default_timezone_set('Asia/Makassar');
                $day = (date('w'));
                $time = (floatval(date('H.i')));
                $timeNow = date('H:i');
    
                $allSchedule = (Schedules::select(
                    'courses.nama as matkul',
                    'sks',
                    'hari',
                    'jam',
                    'kelas',
                    'ruang',
                    'mahasiswa',
                    'd1.nama as dosen1',
                    'd2.nama as dosen2',
                    'd3.nama as dosen3',
                )
                ->join('courses', 'schedules.kode', 'courses.kode')
                ->leftjoin('lecturers as d1', 'schedules.dosen1', 'd1.nidn')
                ->leftjoin('lecturers as d2', 'schedules.dosen2', 'd2.nidn')
                ->leftjoin('lecturers as d3', 'schedules.dosen3', 'd3.nidn')
                ->get()->toArray());
    
                usort($allSchedule, function($a, $b){
                    if ($a['hari'] === $b['hari']) {
                        return strcmp($a['jam'], $b['jam']);
                    }
                    return $a['hari'] - $b['hari'];
                });

                $todaySchedule = [];
                for($i=0;$i<count($allSchedule);$i++){
                    if($allSchedule[$i]['hari'] == $day){
                        $allSchedule[$i]['hari'] = $this->day[$allSchedule[$i]['hari']];
                        $todaySchedule[] = $allSchedule[$i];
                    }else{
                        $allSchedule[$i]['hari'] = $this->day[$allSchedule[$i]['hari']];
                    }
                }
                if($todaySchedule){
                    for($i=0;$i<count($todaySchedule);$i++){
                        $timeStart = floatval(substr($todaySchedule[$i]['jam'], 0, 5));
                        $timeEnd = floatval(substr($todaySchedule[$i]['jam'], 6));
                        if ($time >= $timeStart && $time <= $timeEnd) {
                            $status = 'running';
                        } else if ($time <= $timeStart){
                            $status = 'not_running';
                        } else{
                            $status = 'passed';
                        }
                        $todaySchedule[$i] += array('status' => $status);
                    }
                }
                
            return view('/guest/dashboard', [
                'title' => 'Sistem Informasi Penjadwalan Kuliah Teknik Informatika UHO',
                'sidebar' => 'dasbor',
                'header' => 'Jadwal Perkuliahan',
                'all_schedule' => $allSchedule,
                'today_schedule' => $todaySchedule,
                'query' => ''
            ] 
            );
        }
    }

    public function search(Request $request)
    {   
        $query = $request->search;
        $schedules = (Schedules::select(
            'schedules.id',
            'courses.nama as matkul',
            'sks',
            'hari',
            'jam',
            'kelas',
            'ruang',
            'mahasiswa',
            'd1.nama as dosen1',
            'd2.nama as dosen2',
            'd3.nama as dosen3',
        )
        ->join('courses', 'schedules.kode', 'courses.kode')
        ->leftjoin('lecturers as d1', 'schedules.dosen1', 'd1.nidn')
        ->leftjoin('lecturers as d2', 'schedules.dosen2', 'd2.nidn')
        ->leftjoin('lecturers as d3', 'schedules.dosen3', 'd3.nidn')
        ->where('courses.nama', 'like', '%'.$query.'%')
        ->get()->toArray());

        usort($schedules, function($a, $b){
            if ($a['hari'] === $b['hari']) {
                return strcmp($a['jam'], $b['jam']);
            }
            return $a['hari'] - $b['hari'];
        });
        for($i=0;$i<count($schedules);$i++){
            $schedules[$i]['hari'] = $this->day[$schedules[$i]['hari']];
        }
        if(auth()->user()){
            return view('dashboard', [
                'title' => 'Sistem Informasi Penjadwalan Kuliah | Dasbor',
                'sidebar' => 'dasbor',
                'header' => 'Jadwal Perkuliahan',
                'user' => auth()->user()->name,
                'schedules' => $schedules,
                'query' => $query
            ] 
            );
        }
        else{
            return view('/guest/dashboard', [
                'title' => 'Sistem Informasi Penjadwalan Kuliah Teknik Informatika UHO',
                'sidebar' => 'dasbor',
                'header' => 'Jadwal Perkuliahan',
                'schedules' => $schedules,
                'query' => ''
            ] 
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $courses = Courses::all()->toArray();
        $lecturers = Lecturers::all()->toArray();
        return view('/pages/schedules/create', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Tambah Jadwal',
            'sidebar' => 'dasbor',
            'header' => 'Tambah Jadwal',
            'user' => auth()->user()->name,
            'courses' => $courses,
            'lecturers' => $lecturers,
        ] 
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchedulesRequest $request)
    {   
        if(
            str_contains($request->input('course'), 'Pilih') ||
            str_contains($request->input('room'), 'Pilih') ||
            str_contains($request->input('day'), 'Pilih') ||
            str_contains($request->input('lecturer1'), 'Pilih')
        ){
            return back()->with('errorMsg', 'Pastikan memlih mata kuliah, hari, ruangan, dan dosen pengampu');
        }
        $time = $request->input('time-start').'-'.$request->input('time-end');
        $time = str_replace(':','.',$time);
        $lecturer2 = str_contains($request->input('lecturer2'), 'Pilih') ? null : $request->input('lecturer2');
        $lecturer3 = str_contains($request->input('lecturer2'), 'Pilih') ? null : $request->input('lecturer3');
        $data = [
            "kode" => $request->input('course'),
            "mahasiswa" => $request->input('students'),
            "kelas" => $request->input('class'),
            "hari" => $request->input('day'),
            "jam" => $time,
            "ruang" => $request->input('room'),
            "dosen1" => $request->input('lecturer1'),
            "dosen2" => $lecturer2,
            "dosen3" => $lecturer3,
        ];
        Schedules::create($data);
        $request->session()->flash('success', 'Data berhasil ditambahkan');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedules $schedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $courses = Courses::all()->toArray();
        $lecturers = Lecturers::all()->toArray();
        $scheduleData = Schedules::where('id', $id)->get()->toArray()[0];
        return view('pages/schedules/edit', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Ubah Jadwal',
            'sidebar' => 'dasbor',
            'header' => 'Ubah Jadwal',
            'user' => auth()->user()->name,
            'courses' => $courses,
            'lecturers' => $lecturers,
            'schedules' => $scheduleData,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchedulesRequest $request)
    {
        if(
            str_contains($request->input('course'), 'Pilih') ||
            str_contains($request->input('room'), 'Pilih') ||
            str_contains($request->input('day'), 'Pilih') ||
            str_contains($request->input('lecturer1'), 'Pilih')
        ){
            return back()->with('errorMsg', 'Pastikan memlih mata kuliah, hari, ruangan, dan dosen pengampu');
        }

        $time = $request->input('time-start').'-'.$request->input('time-end');
        $time = str_replace(':','.',$time);
        $lecturer2 = str_contains($request->input('lecturer2'), 'Pilih') ? null : $request->input('lecturer2');
        $lecturer3 = str_contains($request->input('lecturer2'), 'Pilih') ? null : $request->input('lecturer3');
        $data = [
            "kode" => $request->input('course'),
            "mahasiswa" => $request->input('students'),
            "kelas" => $request->input('class'),
            "hari" => $request->input('day'),
            "jam" => $time,
            "ruang" => $request->input('room'),
            "dosen1" => $request->input('lecturer1'),
            "dosen2" => $lecturer2,
            "dosen3" => $lecturer3,
        ];
        Schedules::find($request->input('id'))->update($data);
        $request->session()->flash('success', 'Data berhasil diubah');
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Schedules::find($id)->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect('/');
    }

    public function upload(){
        return view('upload', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Unggah Jadwal',
            'sidebar' => 'dasbor',
            'header' => 'Unggah Jadwal',
            'user' => auth()->user()->name,
            'back' => '/'
        ] 
        );        
    }

    public function import(Request $request){
        $dataInput = Excel::toArray(new ImportSchedules, $request->file('file'))[0];

        try {
            $data = [];
            for($i = 1; $i<count($dataInput);$i++){
                $day = 0;
                switch(strtolower($dataInput[$i][6])){
                    case 'senin':
                        $day = 1;
                        break;
                    case 'selasa':
                        $day = 2;
                        break;
                    case 'rabu':
                        $day = 3;
                        break;
                    case 'kamis':
                        $day = 4;
                        break;
                    case 'jumat':
                        $day = 5;
                        break;
                    default:
                        $day = 0;
                }
                $data[] = [
                    "kode" => $dataInput[$i][1],
                    "mahasiswa" => $dataInput[$i][4],
                    "kelas" => $dataInput[$i][5],
                    "hari" => $day,
                    "jam" => $dataInput[$i][7],
                    "ruang" => $dataInput[$i][8],
                    "dosen1" => $dataInput[$i][9],
                    "dosen2" => $dataInput[$i][10],
                    "dosen3" => $dataInput[$i][11],
                ];
            }
            if($request->has('delete-data')){
                Schedules::truncate();
            }
            foreach($data as $item){
                Schedules::create($item);
            }
        } catch (Throwable $e) {
            session()->flash('eror', 'Data tidak dapat dimasukkan. Format tidak sesuai atau terdapat data ganda');
            redirect()->back();
        }
        
        session()->flash('success', 'Data berhasil diunggah');
        return redirect('/');
    }
}

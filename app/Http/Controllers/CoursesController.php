<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Http\Requests\StoreCoursesRequest;
use App\Http\Requests\UpdateCoursesRequest;
use App\Imports\ImportSchedules;
use App\Models\Schedules;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $courses = Courses::all()->toArray();
        if(auth()->user()){
            return view('course', [
                'title' => 'Sistem Informasi Penjadwalan Kuliah | Mata Kuliah',
                'sidebar' => 'mata-kuliah',
                'header' => 'Mata Kuliah',
                'user' => auth()->user()->name,
                'courses' => $courses,
                'query' => ''
                ] 
            );
            }
        else{
            $courses = Courses::all()->toArray();
            return view('/guest/course', [
                'title' => 'Sistem Informasi Penjadwalan Kuliah Teknik Informatika UHO',
                'sidebar' => 'mata-kuliah',
                'header' => 'Jadwal Perkuliahan',
                'courses' => $courses,
                'query' => ''
            ] 
            );
        }
    }

    public function search(Request $request){
        $query = $request->search;
        $courses = Courses::where('nama', 'like', '%'.$query.'%')->get()->toArray();
        if(auth()->user()){
            return view('course', [
                'title' => 'Sistem Informasi Penjadwalan Kuliah | Mata Kuliah',
                'sidebar' => 'mata-kuliah',
                'header' => 'Mata Kuliah',
                'user' => auth()->user()->name,
                'courses' => $courses,
                'query' => $query
                ] 
            );
        }
        else{
            return view('guest/course', [
                'title' => 'Sistem Informasi Penjadwalan Kuliah Teknik Informatika UHO',
                'sidebar' => 'mata-kuliah',
                'header' => 'Mata Kuliah',
                'courses' => $courses,
                'query' => $query
                ] 
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/pages/courses/create', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Mata Kuliah',
            'sidebar' => 'mata-kuliah',
            'header' => 'Mata Kuliah',
            'user' => auth()->user()->name
            ] 
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoursesRequest $request)
    {   
        $data = $request->validate([
            'kode' => 'unique:courses',
            'nama' => '',
            'sks' => '',
        ]);
        Courses::create($data);
        $request->session()->flash('success', 'Data berhasil ditambahkan');
        return redirect('/mata-kuliah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $coursesm , int $id)
    {
        $courses = Courses::where('id',$id)->get()[0];
        return view('pages/courses/edit', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Ubah Mata Kuliah',
            'sidebar' => 'dasbor',
            'header' => 'Ubah Mata Kuliah',
            'user' => auth()->user()->name,
            'course' => $courses,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoursesRequest $request, Courses $courses)
    {
        $data = $request->validate([
            'id' => '',
            'kode' => '',
            'nama' => '',
            'sks' => '',
        ]);
        Courses::where('id',$data['id'])->update($data);
        $request->session()->flash('success', 'Data berhasil diubah');
        return redirect('/mata-kuliah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Courses::findOrFail($id)->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect('/mata-kuliah');
    }

    public function upload(){
        return view('upload', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Unggah Mata Kuliah',
            'sidebar' => 'mata-kuliah',
            'header' => 'Unggah Mata Kuliah',
            'user' => auth()->user()->name,
            'back' => '/mata-kuliah'
        ] 
        );        
    }

    public function import(Request $request){
        $dataInput = Excel::toArray(new ImportSchedules, $request->file('file'))[0];
        $data = [];

        try{
            for($i = 1; $i<count($dataInput);$i++){
                $data[] = [
                    "kode" => $dataInput[$i][1],
                    "nama" => $dataInput[$i][2],
                    "sks" => $dataInput[$i][3],
                ];
            }

            if($request->has('delete-data')){
                Courses::truncate();
            }

            foreach($data as $item){
                Courses::create($item);
            }
        }catch(Throwable $e){
            session()->flash('error', 'Data tidak dapat dimasukkan. Format tidak sesuai atau terdapat data ganda');
            // return redirect()->back();
        }
        session()->flash('success', 'Data berhasil diunggah');
        return redirect('/mata-kuliah');
    }
}

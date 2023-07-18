<?php

namespace App\Http\Controllers;

use App\Models\Lecturers;
use App\Http\Requests\StoreLecturersRequest;
use App\Http\Requests\UpdateLecturersRequest;
use App\Imports\ImportSchedules;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturer = Lecturers::all()->toArray();
        return view('lecturer', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Mata Kuliah',
            'sidebar' => 'pengajar',
            'header' => 'Pengajar',
            'user' => auth()->user()->name,
            'lecturer' => $lecturer,
            'query' => ''
        ]);
    }

    public function search(Request $request){
        $query = $request->search;
        $lecturers = Lecturers::where('nama', 'like', '%'.$query.'%')->get()->toArray();
        return view('lecturer', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Pengajar',
            'sidebar' => 'pengajar',
            'header' => 'Pengajar',
            'user' => auth()->user()->name,
            'lecturer' => $lecturers,
            'query' => $query
            ] 
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/pages/lecturers/create', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Pengajar',
            'sidebar' => 'pengajar',
            'header' => 'Pengajar',
            'user' => auth()->user()->name
            ] 
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLecturersRequest $request)
    {
        $data = $request->validate([
            'nidn' => 'unique:lecturers',
            'nama' => '',
        ]);
        Lecturers::create($data);
        $request->session()->flash('success', 'Data berhasil ditambahkan');
        return redirect('/pengajar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturers $lecturers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturers $lecturers, int $id)
    {
        $lecturer = Lecturers::where('id',$id)->get()[0];
        return view('pages/lecturers/edit', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Ubah Pengajar',
            'sidebar' => 'dasbor',
            'header' => 'Ubah Pengajar',
            'user' => auth()->user()->name,
            'lecturer' => $lecturer,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLecturersRequest $request)
    {
        $data = $request->validate([
            'id' => '',
            'nidn' => '',
            'nama' => '',
        ]);
        Lecturers::where('id',$data['id'])->update($data);
        $request->session()->flash('success', 'Data berhasil diubah');
        return redirect('/pengajar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturers $lecturers, int $id)
    {
        Lecturers::findOrFail($id)->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect('/pengajar');
    }

    public function upload(){
        return view('upload', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Unggah Pengajar',
            'sidebar' => 'pengajar',
            'header' => 'Unggah Pengajar',
            'user' => auth()->user()->name,
            'back' => '/pengajar'
        ] 
        );        
    }

    public function import(Request $request){
        $dataInput = Excel::toArray(new ImportSchedules, $request->file('file'))[0];
        $data = [];

        try{
            for($i = 1; $i<count($dataInput);$i++){
                $data[] = [
                    "nidn" => $dataInput[$i][2],
                    "nama" => $dataInput[$i][1],
                ];
            }

            if($request->has('delete-data')){
                Lecturers::truncate();
            }

            foreach($data as $item){
                Lecturers::create($item);
            }
        }catch(Throwable $e){
            session()->flash('error', 'Data tidak dapat dimasukkan. Format tidak sesuai atau terdapat data ganda');
            return redirect()->back();
        }
        session()->flash('success', 'Data berhasil diunggah');
        return redirect('/pengajar');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Lecturers;
use App\Http\Requests\StoreLecturersRequest;
use App\Http\Requests\UpdateLecturersRequest;
use Illuminate\Http\Request;

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
}

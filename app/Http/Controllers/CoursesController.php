<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Http\Requests\StoreCoursesRequest;
use App\Http\Requests\UpdateCoursesRequest;
use App\Models\Schedules;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::all()->toArray();
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

    public function search(Request $request){
        $query = $request->search;
        $courses = Courses::where('nama', 'like', '%'.$query.'%')->get()->toArray();
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
            'tipe' => '',
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
            'tipe' => '',
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
}
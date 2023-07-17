<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lecturers;
use App\Models\Schedules;
use App\Http\Controllers\SchedulesController;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function all()
    {
        return view('dashboard', [
            'title' => 'Sistem Informasi Penjadwalan Kuliah | Dasbor',
            'sidebar' => 'dasbor',
            'header' => 'Jadwal',
            'user' => auth()->user()->name
        ] 
        );
    }
    public function course()
    {
        
    }
    public function lecturer()
    {
        
    }
}

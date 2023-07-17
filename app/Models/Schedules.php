<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $fillable = [
        "kode",
        "mahasiswa",
        "kelas",
        "hari",
        "jam",
        "ruang",
        "dosen1",
        "dosen2",
        "dosen3",
    ];
    public function course()
    {
        return $this->belongsTo(Courses::class)->select(['nama', 'tipe']);
    }
    public function lecturer()
    {
        return $this->belongsTo(Lecturers::class)->select(['nama']);
    }
}

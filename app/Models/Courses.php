<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        "kode",
        "nama",
        "sks",
        "tipe",
    ];
    public function schedule()
    {
        return $this->hasMany(Schedules::class);
    }
}

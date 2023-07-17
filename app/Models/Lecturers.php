<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturers extends Model
{
    use HasFactory;
    protected $fillable = [
        "nidn",
        "nama"
    ];
    public function schedule()
    {
        return $this->hasMany(Schedules::class);
    }
}

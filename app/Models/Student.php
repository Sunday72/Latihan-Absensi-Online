<?php

namespace App\Models;

use App\Models\Absent;
use App\Models\Schedule;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['absent', 'schedule'];

    public function absent(){
        return $this->hasMany(Absent::class);
    }

    public function schedule(){
        return $this->belongsTo(Schedule::class, 'id_jadwal', 'id');
    }
}

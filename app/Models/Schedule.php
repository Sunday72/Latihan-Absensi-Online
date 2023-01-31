<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['student'];

    public function student(){
        return $this->hasMany(Student::class, 'id_jadwal');
    }
}

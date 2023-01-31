<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absent extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $with = ['student'];
    protected $guarded = ['id'];

    public function student(){
        return $this->belongsTo(Student::class, 'id_murid');
    }
}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nis','name','kelas','qr_id'];
    public function attendances(){ return $this->hasMany(Attendance::class); }
}

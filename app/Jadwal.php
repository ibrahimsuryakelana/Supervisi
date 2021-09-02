<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $primaryKey='id';
    protected $table = 'jadwal';
    protected $fillable = ['id','tanggal','nama_guru','nama_supervisor','status','aktivitas'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $primaryKey='id';
    protected $table = 'rpp';
    protected $fillable = ['judul_rpp','rpp','materi','nama_guru','nama_supervisor','tanggal_upload','status'];
}

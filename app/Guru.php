<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $primaryKey='id';
    protected $table = 'rpp';
    protected $fillable = ['id','judul_rpp','rpp','materi','id_guru','nama_guru','nama_supervisor','tanggal_upload','status'];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Carbon\Carbon;

class GuruController extends Controller
{
    public function index()
    {
        $data_guru = Guru::all();
        return view('guru.index',['data_guru' => $data_guru]);
    }
    public function create(Request $request)
    {
        $guru = new Guru;
        $guru->judul_rpp = $request->judul_rpp;
        $guru->rpp = $request->rpp;
        $guru->materi = $request->materi;
        $guru->id_guru = $request->id_guru;
        $guru->nama_guru = $request->nama_guru;
        $guru->nama_supervisor = $request->nama_supervisor;
        $guru->tanggal_upload = Carbon::now()->timezone('Asia/Jakarta');
        $guru->status = "Rejected";
        $guru->save();

    	return redirect('/guru')->with('sukses','Data Berhasil Di input');
    }
}

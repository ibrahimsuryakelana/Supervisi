<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $data_jadwal = Jadwal::all();
        return view('jadwal.index',['data_jadwal' => $data_jadwal]);
    }

    public function create(Request $request)
    {
        $jadwal = new Jadwal;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->nama_guru = $request->nama_guru;
        $jadwal->nama_supervisor = $request->nama_supervisor;
        $jadwal->status = "Rejected";
        $jadwal->aktivitas = $request->aktivitas;
        $jadwal->save();
    	return redirect('/jadwal')->with('sukses','Data Berhasil Di input');
    }

    public function edit($id)
    {
    	$jadwal = Jadwal::find($id);
    	return view('jadwal/edit',['jadwal'=> $jadwal, 'id' => $id]); 
    }

    public function update(Request $request, $jadwal)
    {
    	$jadwal = Jadwal::find($jadwal);
    	$jadwal->update($request->all());
    	return redirect('/jadwal')->with('sukses','Data Berhasil Di update');
    }

    public function delete($id)
    {
    	$jadwal = Jadwal::find($id);
        $jadwal -> delete($jadwal);
        return redirect('/jadwal')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
}

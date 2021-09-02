<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum;

class KurikulumController extends Controller
{
    public function index()
    {
        $data_kurikulum = Kurikulum::all();
        return view('kurikulum.index',['data_kurikulum' => $data_kurikulum]);
    }

    public function create(Request $request)
    {
        $kurikulum = new Kurikulum;
        $kurikulum->tanggal = $request->tanggal;
        $kurikulum->nama_guru = $request->nama_guru;
        $kurikulum->nama_supervisor = $request->nama_supervisor;
        $kurikulum->status = "Rejected";
        $kurikulum->aktivitas = $request->aktivitas;
        $kurikulum->save();
    	return redirect('/jadwal')->with('sukses','Data Berhasil Di input');
    	
    	return redirect('/kurikulum')->with('sukses','Data Berhasil Di input');
    }

    public function edit($id_kurikulum)
    {
    	$kurikulum = Kurikulum::find($id_kurikulum);
    	return view('kurikulum/edit',['kurikulum'=> $kurikulum]); 
    }

    public function update(Request $request, $kurikulum)
    {
    	$kurikulum = Kurikulum::find($kurikulum);
    	$kurikulum->update($request->all());
    	return redirect('/kurikulum')->with('sukses','Data Berhasil Di Periksa');
    }

    public function delete($id_kurikulum)
    {
    	$kurikulum = Kurikulum::find($id_kurikulum);
        $kurikulum -> delete($kurikulum);
        return redirect('/kurikulum')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
}

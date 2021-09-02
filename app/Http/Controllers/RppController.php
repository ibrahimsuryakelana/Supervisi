<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rpp;
use Carbon\Carbon;

class RppController extends Controller
{
    public function index()
    {
        $data_rpp = Rpp::all();
        return view('rpp.index',['data_rpp' => $data_rpp]);
    }

    //ini buat create otomatis waktunya sama statusnya
    public function create(Request $request)
    {
        $rpp = new Rpp;
        $rpp->judul_rpp = $request->judul_rpp;
        $rpp->rpp = $request->rpp;
        $rpp->materi = $request->materi;
        $rpp->id_guru = $request->id_guru;
        $rpp->nama_guru = $request->nama_guru;
        $rpp->nama_supervisor = $request->nama_supervisor;
        $rpp->tanggal_upload = Carbon::now()->timezone('Asia/Jakarta');
        $rpp->status = "Rejected";
        $rpp->save();

    	return redirect('/rpp')->with('sukses','Data Berhasil Di input');
    }

    public function edit($id)
    {
    	$rpp = Rpp::find($id);
    	return view('rpp/edit',['rpp'=> $rpp, 'id' => $id]); 
    }

    public function update(Request $request, $rpp)
    {
    	$rpp = Rpp::find($rpp);
    	$rpp->update($request->all());
    	return redirect('/rpp')->with('sukses','Data Berhasil Di update');
    }

    public function delete($id)
    {
    	$rpp = Rpp::find($id);
        $rpp -> delete($rpp);
        return redirect('/rpp')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
    public function download($id){
        $model_file = Model::findOrFail($id); //Mencari model atau objek yang dicari
        $file = public_path() . '/storage/' . $model_file->file;//Mencari file dari model yang sudah dicari
        return response()->download($file, $model_file->file_name); //Download file yang dicari berdasarkan nama file
   }
}

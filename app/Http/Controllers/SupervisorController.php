<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supervisor;

class SupervisorController extends Controller
{
    public function index()
    {
        $data_supervisor = Supervisor::all();
        return view('supervisor.index',['data_supervisor' => $data_supervisor]);
    }

    public function edit($id_supervisor)
    {
    	$supervisor = Supervisor::find($id_supervisor);
    	return view('supervisor/edit',['supervisor'=> $supervisor]); 
    }

    public function update(Request $request, $supervisor)
    {
    	$supervisor = Supervisor::find($supervisor);
    	$supervisor->update($request->all());
    	return redirect('/supervisor')->with('sukses','Data Berhasil Di Periksa');
    }

    public function delete($id_supervisor)
    {
    	$supervisor = Supervisor::find($id_supervisor);
        $supervisor -> delete($supervisor);
        return redirect('/supervisor')->with ('sukses', 'Data Berhasil Di Hapus');  
    }

}

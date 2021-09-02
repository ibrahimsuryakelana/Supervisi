<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kepsek;

class KepsekController extends Controller
{
    public function index()
    {
        $data_kepsek = Kepsek::all();
        return view('kepsek.index',['data_kepsek' => $data_kepsek]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function showBuatLaporan()
    {
        return view('buat-laporan-spd');
    }
}

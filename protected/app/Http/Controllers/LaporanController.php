<?php

namespace App\Http\Controllers;

use App\UserJLN;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function showBuatLaporan(Request $request, $id)
    {
        $userjln = UserJLN::find($id);
//        dd($userJLN);

        return \View::make('buat-laporan-spd',compact('userjln'))->render();
    }
}

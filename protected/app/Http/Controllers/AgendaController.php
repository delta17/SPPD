<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function showAgenda()
    {
      return view('agenda');
    }

    public function insertAgenda(){

    }
}

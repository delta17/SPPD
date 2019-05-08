<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\FormJLN;
use App\UserJLN;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function showAgenda()
    {
      $agendas = Agenda::all();
//      dd($agendas);
      return view('agenda',compact('agendas'));

    }

    public function insertAgenda(){

    }
}

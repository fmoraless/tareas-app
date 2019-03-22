<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;

class TareasController extends Controller
{
    public function index()
    {
        $tareas = Tarea::orderBy('id','DESC')->where('completado','0')->paginate(3);
        return view('tareas.index',compact('tareas'));
    }
}






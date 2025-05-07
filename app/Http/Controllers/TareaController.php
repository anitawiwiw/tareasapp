<?php

namespace App\Http\Controllers; // Esta línea es importante

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index() {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function store(Request $request) {
        Tarea::create($request->only('titulo'));
        return redirect('/');
    }

    public function edit($id) {
        $tarea = Tarea::findOrFail($id);
        return view('tareas.edit', compact('tarea'));
    }

    public function update(Request $request, $id) {
        $tarea = Tarea::findOrFail($id);
        $tarea->update($request->only('titulo', 'completada'));
        return redirect('/');
    }

    public function destroy($id) {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect('/');
    }
}


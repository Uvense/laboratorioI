<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarea;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        return  view('tarea.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data ['tareas']=Tarea::all();
        return view('tarea.create', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tarea = request()->except('_token');
        Tarea::insert($tarea);
        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    $tarea = Tarea::findOrFail($id);

    return view('tarea.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

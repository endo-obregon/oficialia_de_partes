<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::get();
        return view('registros.registrosList', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    
    {
        $usuarios = User::get();
        return view('registros.registrosForm', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_registro'=>'required|min:5|max:255|string',
            'fecha'=>'required|date',
            'asunto'=>'required|min:5|max:255|string',
            'dependencia'=>'required|min:5|max:255|string',
            'envia'=>'required|min:5|max:255|string',
            'destinatario'=>'required|min:5|max:255|string',
            'seguimiento'=>'required|min:5|max:255|string',
            'user_id'=>'required|numeric',
        ]);
        Registro::create($request->all());
        return redirect(route('registro.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        return view('registros.registroShow', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        $usuarios = User::get();
        return view('registros.registrosForm', compact('registro', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        $request->validate([
            'no_registro'=>'required|min:5|max:255|string',
            'fecha'=>'required|date',
            'asunto'=>'required|min:5|max:255|string',
            'dependencia'=>'required|min:5|max:255|string',
            'envia'=>'required|min:5|max:255|string',
            'destinatario'=>'required|min:5|max:255|string',
            'seguimiento'=>'required|min:5|max:255|string',
            'user_id'=>'required|numeric',
        ]);
        Registro::where('id', $registro->id)->update($request->except('_method', '_token'));
        return redirect(route('registro.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();
        return redirect(route('registro.index'));
    }
}

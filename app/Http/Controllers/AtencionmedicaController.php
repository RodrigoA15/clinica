<?php

namespace App\Http\Controllers;

use App\Models\Atencionmedica;
use Illuminate\Http\Request;

class AtencionmedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atencion = Atencionmedica::all();
        return view('atencion_medica.index', compact('atencion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('atencion_medica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atencion = new Atencionmedica;
        $atencion->sintomas_paciente = $request->sintomas_paciente;
        $atencion->diagnostico_paciente = $request->diagnostico_paciente;
        $atencion->tratamiento_paciente = $request->tratamiento_paciente;
        $atencion->recomendacion_medico = $request->recomendacion_medico;
        $atencion->requiere_autorizacion = $request->requiere_autorizacion;
        $atencion->numero_autorizacion = $request ->numero_autorizacion;
        $atencion->id_historiaclinica = $request->id_historiaclinica;

        $atencion->save();

        return redirect()->route('atencion.index');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atencionmedica  $atencionmedica
     * @return \Illuminate\Http\Response
     */
    public function show(Atencionmedica $atencionmedica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atencionmedica  $atencionmedica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atencion = Atencionmedica::find($id);
        return view('atencion_medica.edit', compact('atencion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atencionmedica  $atencionmedica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $atencion = Atencionmedica::find($id);
        $atencion->sintomas_paciente = $request->sintomas_paciente;
        $atencion->diagnostico_paciente = $request->diagnostico_paciente;
        $atencion->tratamiento_paciente = $request->tratamiento_paciente;
        $atencion->recomendacion_medico = $request->recomendacion_medico;
        $atencion->requiere_autorizacion = $request->requiere_autorizacion;
        $atencion->numero_autorizacion = $request ->numero_autorizacion;
        $atencion->id_historiaclinica = $request->id_historiaclinica;

        $atencion->save();
        return redirect()->route('atencion.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atencionmedica  $atencionmedica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atencionmedica $atencionmedica)
    {
        //
    }
}

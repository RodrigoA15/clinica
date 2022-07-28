<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $paciente = Paciente::Paginate(1);

        return \view ('paciente.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view ('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente;
        $paciente->nombre_paciente = $request->nombre_paciente;
        $paciente->apellido_paciente = $request->apellido_paciente;
        $paciente->tipo_documento = $request->tipo_documento;
        $paciente->telefono_paciente = $request->telefono_paciente;
        $paciente->direccion_paciente = $request->direccion_paciente;

        $paciente->save();

        return redirect()->route('pacientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        return \view('paciente.edit', compact('paciente'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);
        $paciente->nombre_paciente = $request->nombre_paciente;
        $paciente->apellido_paciente = $request->apellido_paciente;
        $paciente->tipo_documento = $request->tipo_documento;
        $paciente->telefono_paciente = $request->telefono_paciente;
        $paciente->direccion_paciente = $request->direccion_paciente;

        $paciente->save();

        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        return redirect()->route('pacientes.index');
    }
}

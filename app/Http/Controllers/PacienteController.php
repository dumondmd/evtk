<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PacienteController extends Controller
{
    
    public function index()
    {        
        return view('paciente');
    }

   //API
    
    public function store(Request $request)
    {
        Paciente::create($request->all());
        return response()->json('Paciente adicionado com sucesso!');
    }

   
    public function show($id)
    {
        return Paciente::findOrFail($id);
    }


    public function showAll()
    {
        return Paciente::all();        
    }
    
    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());
        return response()->json('Paciente atualizado com sucesso!');
    }

   
    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();
        return response()->json('Paciente deletadp com sucesso!');        
    }
}

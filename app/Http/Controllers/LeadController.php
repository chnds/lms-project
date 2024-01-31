<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index(Request $request)
    {
        $leads = Lead::all();

        return view('leads.index', compact('leads'));
    }

    public function create()
    {
        return response()->json(['message' => 'Método não suportado.'], 405);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:leads',
        ]);

        Lead::create($request->all());

        return response()->json(['message' => 'Lead criado com sucesso.'], 201);
    }

    public function edit($id)
    {
        return response()->json(['message' => 'Método não suportado.'], 405);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:leads,email,' . $id,
        ]);

        $lead = Lead::find($id);
        if (!$lead) {
            return response()->json(['message' => 'Lead não encontrado.'], 404);
        }

        $lead->update($request->all());

        return response()->json(['message' => 'Lead atualizado com sucesso.'], 200);
    }

    public function show($id)
    {
        $lead = Lead::find($id);
        if (!$lead) {
            return response()->json(['message' => 'Lead não encontrado.'], 404);
        }

        return response()->json(['lead' => $lead], 200);
    }

    public function destroy($id)
    {
        $lead = Lead::find($id);
        if (!$lead) {
            return response()->json(['message' => 'Lead não encontrado.'], 404);
        }

        $lead->delete();

        return response()->json(['message' => 'Lead excluído com sucesso.'], 200);
    }

    public function list(Request $request)
    {
        $leads = Lead::all();

        return response()->json(['leads' => $leads], 200);
    }
}

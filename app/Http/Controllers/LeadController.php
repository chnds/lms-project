<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::all();
        return view('leads.index', compact('leads'));
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:leads',
        ]);

        Lead::create($request->all());

        return redirect()->route('leads.index')
            ->with('success', 'Lead criado com sucesso.');
    }

    public function edit($id)
    {
        $lead = Lead::findOrFail($id);
        return view('leads.edit', compact('lead'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:leads,email,' . $id,
        ]);

        $lead = Lead::findOrFail($id);
        $lead->update($request->all());

        return redirect()->route('leads.index')
            ->with('success', 'Lead atualizado com sucesso.');
    }

    public function show($id)
    {
        $lead = Lead::findOrFail($id);
        return view('leads.show', compact('lead'));
    }

    public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();

        return redirect()->route('leads.index')
            ->with('success', 'Lead excluído com sucesso.');
    }
}

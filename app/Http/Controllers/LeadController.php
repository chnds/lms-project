<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index(Request $request)
    {
        $query = $request->input('query');
        $leads = Lead::query()
                     ->where('nome', 'LIKE', "%{$query}%")
                     ->orWhere('email', 'LIKE', "%{$query}%")
                     ->orWhere('telefone', 'LIKE', "%{$query}%")
                     ->orWhere('empresa', 'LIKE', "%{$query}%")
                     ->orderBy('nome', 'asc')
                     ->paginate(10);
    
        return view('leads.index', compact('leads'));

        return view('leads.index', compact('leads'));
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store()
    {
        $this->validateLead();

        $lead = Lead::create($this->request->all());

        return $this->respond('Lead criado com sucesso.', $lead);
    }

    public function edit($id)
    {
        $lead = Lead::findOrFail($id);
        return view('leads.edit', compact('lead'));
    }

    public function update($id)
    {
        $this->validateLead($id);

        $lead = Lead::findOrFail($id);
        $lead->update($this->request->all());

        return $this->respond('Lead atualizado com sucesso.', $lead);
    }

    public function show($id)
    {
        $lead = Lead::findOrFail($id);
        return $this->respond('Lead encontrado com sucesso!', $lead);
    }

    public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();

        return $this->respond('Lead deletado com sucesso.', $lead);
    }

    public function list()
    {
        $leads = Lead::all();
        return response()->json(['leads' => $leads], 200);
    }

    protected function validateLead($id = null)
    {
        $rules = [
            'nome' => 'required',
            'email' => 'required|email|unique:leads,email,' . $id,
        ];

        return $this->validate($this->request, $rules);
    }

    protected function respond($message, $lead)
    {
        if ($this->request->expectsJson()) {
            return response()->json(['message' => $message, 'lead' => $lead], 200);
        } else {
            return redirect()->route('leads.index')->with('success', $message);
        }
    }
}

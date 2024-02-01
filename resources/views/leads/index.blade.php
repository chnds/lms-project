<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leads') }}
        </h2>
        @extends('layouts.common')
    </x-slot>

    @include('leads.modal.create')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
  
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="font-semibold text-xl  leading-tight">Empresas</h2>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addLeadModal">
                                Adicionar Lead
                            </button>
                        </div>
                    </div>
                </div>
                <form action="{{ route('leads.index') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Pesquisar" name="query" value="{{ request('query') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                        </div>
                    </div>
                </form>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Empresa</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leads as $lead)
                            <tr>
                                <td>{{$lead->nome}}</td>
                                <td>{{$lead->email}}</td>
                                <td>{{$lead->telefone}}</td>
                                <td>{{$lead->empresa}}</td>
                                <td>
                                  
                                    <button type="button" class="show-lead-btn btn-sm" data-toggle="modal" data-target="#showLeadModal" data-lead-id="{{ $lead->id }}">
                                        <i class="material-icons" style="color: #9FA6B2;">visibility</i>
                                    </button>

                                    <a href="{{ route('leads.edit',$lead->id) }}" class="btn-sm">
                                        <i class="material-icons" style="color: #54B4D3;">edit</i> 
                                    </a>

                                    <form action="{{ route('leads.destroy',$lead->id) }}" method="POST" id="deleteForm">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn-sm" onclick="confirmDelete()">
                                            <i class="material-icons"  style="color: #DC4C64;">delete</i> 
                                        </button>
                                    </form>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $leads->appends(request()->input())->links() }}
            </div>
        </div>        
    </div>
@include('leads.modal.show')
    
</x-app-layout>

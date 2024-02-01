    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Atualizar: :empresa', ['empresa' => $lead->empresa]) }}
            </h2>
            @extends('layouts.common')
        </x-slot>
        <div class="table-responsive">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    <form method="POST" action="{{ route('leads.update', ['lead' => $lead->id]) }}">
                                        @csrf
                                        @method('PUT')
                                                    
                                            <div class="form-group">
                                                <label for="nome">Nome</label>
                                                <input type="text" class="form-control" name="nome" id="nome" value="{{ $lead->nome }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{ $lead->email }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefone">Telefone</label>
                                                <input type="text" class="form-control" name="telefone" id="telefone" value="{{ $lead->telefone }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="empresa">Empresa</label>
                                                <input type="text" class="form-control" name="empresa" id="empresa" value="{{ $lead->empresa }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="cargo">Cargo</label>
                                                <input type="text" class="form-control" name="cargo" id="cargo" value="{{ $lead->cargo }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="interesses">Interesses</label>
                                                <textarea class="form-control" name="interesses" id="interesses">{{ $lead->interesses }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="fonte">Fonte</label>
                                                <input type="text" class="form-control" name="fonte" id="fonte" value="{{ $lead->fonte }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status" id="status">
                                                    <option value="novo" {{ $lead->status == 'novo' ? 'selected' : '' }}>Novo</option>
                                                    <option value="em_acompanhamento" {{ $lead->status == 'em_acompanhamento' ? 'selected' : '' }}>Em Acompanhamento</option>
                                                    <option value="convertido" {{ $lead->status == 'convertido' ? 'selected' : '' }}>Convertido</option>
                                                </select>
                                            </div>				
                                            <a href="{{ route('leads.index') }}" class="btn btn-danger">
                                                Cancelar
                                            </a>
                                            <button type="submit" class="btn btn-success">Atualizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
</x-app-layout>
    
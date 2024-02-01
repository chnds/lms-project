<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leads') }}
        </h2>
        <!-- Links para os arquivos CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Links para os arquivos JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/leads/lead.js') }}"></script>
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
                            <h2 class="font-semibold text-xl  leading-tight">Listagem de <b>Leads</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addLeadModal">
                                Adicionar Lead
                            </button>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Empresa</th>
                            <th>Cargo</th>
                            <th>Interesses</th>
                            <th>Fonte</th>
                            <th>Status</th>
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
                                <td>{{$lead->cargo}}</td>
                                <td>{{$lead->interesses}}</td>
                                <td>{{$lead->fonte}}</td>
                                <td>{{ str_replace('_', ' ', $lead->status) }}</td>
                                <td>
                                    <a href="#editLeadModal" class="editLeadButton" lead-id="{{ $lead->id }}" data-toggle="modal"><i class="material-icons">&#xe3c9;</i> </a>
                                    <a href="#deleteLeadModal" class="deleteLeadButton" lead-id="{{ $lead->id }}" data-toggle="modal"><i class="material-icons">&#xe872;</i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Mostrando <b>x</b> de <b>y</b> registros</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Anterior</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Próximo</a></li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>
@include('leads.modal.edit')
</x-app-layout>
@include('leads.modal.delete')

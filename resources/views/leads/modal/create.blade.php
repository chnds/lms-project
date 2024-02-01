<div id="addLeadModal" class="modal fade">
    <div class="modal-dialog" style="max-width: 800px;">
        <div class="modal-content">
            <form method="POST" action="{{ route('leads.store') }}">
                @csrf
                <div class="modal-header">						
                    <h4 class="modal-title">Adicionar novo lead</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone">
                        </div>
                        <div class="col-md-6">
                            <label for="empresa">Empresa</label>
                            <input type="text" class="form-control" id="empresa" name="empresa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="cargo">Cargo</label>
                            <input type="text" class="form-control" id="cargo" name="cargo">
                        </div>
                        <div class="col-md-6">
                            <label for="interesses">Interesses</label>
                            <textarea class="form-control" id="interesses" name="interesses"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="fonte">Fonte</label>
                            <input type="text" class="form-control" id="fonte" name="fonte">
                        </div>
                        <div class="col-md-6">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="novo">Novo</option>
                                <option value="em_acompanhamento">Em Acompanhamento</option>
                                <option value="convertido">Convertido</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
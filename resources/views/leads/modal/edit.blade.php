<div class="modal fade" id="editLeadModal" tabindex="-1" role="dialog" aria-labelledby="editLeadModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editLeadModalLabel">Editar Lead</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('leads.update', ['lead' => $lead->id]) }}">
                @csrf
                @method('PUT')
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" name="telefone">
                        </div>
                        <div class="form-group">
                            <label>Empresa</label>
                            <input type="text" class="form-control" name="empresa">
                        </div>
                        <div class="form-group">
                            <label>Cargo</label>
                            <input type="text" class="form-control" name="cargo">
                        </div>
                        <div class="form-group">
                            <label>Interesses</label>
                            <textarea class="form-control" name="interesses"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Fonte</label>
                            <input type="text" class="form-control" name="fonte">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option value="novo">Novo</option>
                                <option value="em_acompanhamento">Em Acompanhamento</option>
                                <option value="convertido">Convertido</option>
                            </select>
                        </div>				
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Atualizar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
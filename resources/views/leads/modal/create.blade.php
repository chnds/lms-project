<div id="addLeadModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('leads.store') }}">
                @csrf
                <div class="modal-header">						
                    <h4 class="modal-title">Adicionar novo lead</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
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
                    <button type="submit" class="btn btn-success">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
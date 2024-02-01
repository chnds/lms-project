<div id="showLeadModal" class="modal fade">
    <div class="modal-dialog" style="max-width: 800px;">
        <div class="modal-content">
            <div class="modal-header">						
                <h4 class="modal-title">Detalhes do Lead</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="show_nome">Nome</label>
                        <input type="text" class="form-control" id="show_nome" name="nome" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="show_email">Email</label>
                        <input type="email" class="form-control" id="show_email" name="email" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="show_telefone">Telefone</label>
                        <input type="text" class="form-control" id="show_telefone" name="telefone" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="show_empresa">Empresa</label>
                        <input type="text" class="form-control" id="show_empresa" name="empresa" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="show_cargo">Cargo</label>
                        <input type="text" class="form-control" id="show_cargo" name="cargo" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="show_interesses">Interesses</label>
                        <textarea class="form-control" id="show_interesses" name="interesses" readonly></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="show_fonte">Fonte</label>
                        <input type="text" class="form-control" id="show_fonte" name="fonte" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="show_status">Status</label>
                        <select class="form-control" id="show_status" name="status" disabled>
                            <option value="novo">Novo</option>
                            <option value="em_acompanhamento">Em Acompanhamento</option>
                            <option value="convertido">Convertido</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

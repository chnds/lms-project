<div class="modal fade" id="deleteLeadModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLeadModalLabel">Excluir lead</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Use um formulário POST com o campo _method definido como DELETE -->
                <form method="POST" action="{{ route('leads.destroy', ['lead' => $lead->id]) }}">
                    @csrf
                    @method('DELETE') <!-- Adicione esta linha para definir o método DELETE -->
                    <p>Tem certeza que deseja excluir este lead ?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

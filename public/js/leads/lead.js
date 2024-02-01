function confirmDelete() {
    if (confirm('Tem certeza de que deseja excluir este item?')) {
        document.getElementById('deleteForm').submit();
    }
}

$(document).ready(function() {
    $('.show-lead-btn').click(function() {
        var leadId = $(this).data('lead-id');

        $.ajax({
            url: '/leads/' + leadId,
            type: 'GET',
            success: function(response) {
                $('#show_nome').val(response.lead.nome);
                $('#show_email').val(response.lead.email);
                $('#show_telefone').val(response.lead.telefone);
                $('#show_empresa').val(response.lead.empresa);
                $('#show_cargo').val(response.lead.cargo);
                $('#show_interesses').val(response.lead.interesses);
                $('#show_fonte').val(response.lead.fonte);
                $('#show_status').val(response.lead.status).prop('selected', true).prop('disabled', true);
                
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});

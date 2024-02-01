$(document).ready(function() {
    $('.editLeadButton').click(function(e) {
        e.preventDefault(); 
        var leadId = $(this).attr('lead-id');
        $.ajax({
            url: '/leads/' + leadId,
            type: 'GET',
            success: function(response) {
                $('#editLeadModal input[name="nome"]').val(response.lead.nome);
                $('#editLeadModal input[name="email"]').val(response.lead.email);
                $('#editLeadModal input[name="telefone"]').val(response.lead.telefone);
                $('#editLeadModal input[name="empresa"]').val(response.lead.empresa);
                $('#editLeadModal input[name="cargo"]').val(response.lead.cargo);
                $('#editLeadModal textarea[name="interesses"]').val(response.lead.interesses);
                $('#editLeadModal input[name="fonte"]').val(response.lead.fonte);
                $('#editLeadModal input[name="status"]').val(response.lead.status);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});

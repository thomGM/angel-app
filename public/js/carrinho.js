$(document).ready(function() {
    $('input[name="quantidade"]').on('change', function() {
        var quantidadeInput = $(this);
        var valorCampo1 = parseFloat(quantidadeInput.val());

        var itemId = quantidadeInput.attr('id').split('_')[1];
        var valorCampo2 = parseFloat($('#val_' + itemId).val());

        if (!isNaN(valorCampo1) && !isNaN(valorCampo2)) {
            var resultado = (valorCampo1 * valorCampo2).toFixed(2);

            $('#valor_' + itemId).text(resultado);
        }
    });

    $('input[name="excluir"]').on('click', function() {
        var excluir = $(this);
        var id = excluir.attr('id').split('_')[1];
        var dataExcluir = {
            id: id
        }

        $.ajax({
            url: "{{ route('carrinho.verifyLogin') }}",
            type: "post",
            data: JSON.stringify(dataExcluir),
            dataType: 'json',
            success: function(data) {
                if (data.status == 1) {
                    console.log(data.messagem);
                    window.location.href = "{{ route('carrinho.adicionar') }}";
                } else {
                    console.log(data.messagem);
                }
            }
        });
    })
});

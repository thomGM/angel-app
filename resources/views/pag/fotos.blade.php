<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/addFotos.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body  topmargin="0" leftmargin="0">
    <header>
        @include('components.menu')
    </header>
<div>
    <h1> Incluir novas fotos </h1></br>

    <form method="POST" enctype="multipart/form-data" action="{{ route('roupas') }}">
    @csrf
        <strong>Modulo</strong></br>
        <select name="modulo" id="modulo"  class = "select">
            <option value="1">FEMININO</option>
            <option value="2">MASCULINO</option>
            <option value="3">CALÇADOS/ACES.</option>
            <option value="4">LANÇAMENTOS</option>
            <option value="5">OFERTAS</option>
        </select></br>
        <strong>Tipo</strong></br>
        <select name="tipo" id="tipo"  class = "select">
            <option value="1">CAMISAS</option>
            <option value="2">CALÇA</option>
            <option value="3">CASACO</option>
        </select></br>
        <strong>Genêro</strong></br>
        <select name="genero" id="genero" class="select">
            <option value="1">FEMININO</option>
            <option value="2">MASCULINO</option>
        </select></br>
        <strong>Descrição</strong></br>
        <textarea id="texto" name="texto" rows="4" cols="50"></textarea></br>
        <strong>Descrição Detalhada</strong></br>
        <textarea id="textoDetalhado" name="textoDetalhado" rows="4" cols="50"></textarea></br>
        <strong> Anexar foto </strong></br>
        <input type="file" name="foto" id="foto"></br></br>
        <strong>Cores</strong></br>

            <input type="checkbox" id="all"/>
            <label>Selecionar todos</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Branco"/>
            <label>Branco</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Preto"/>
            <label>Preto</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Vermelho"/>
            <label>Vermelho</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Azul"/>
            <label>Azul</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Cinza"/>
            <label>Cinza</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Marron"/>
            <label>Marron</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Amarelo"/>
            <label>Amarelo</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Verde"/>
            <label>Verde</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Laranja"/>
            <label>Laranja</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Roxo"/>
            <label>Roxo</label> 
            <input name="cor[]" class="cor" type="checkbox" value="Rosa"/>
            <label>Rosa</label> </br></br>

            <strong>Tamanhos</strong> </br>
            <input type="checkbox" id="alltamanho"/>
            <label>Selecionar todos</label>
            <input name="tamanho[]" class="tamanho" type="checkbox" value="p"/>
            <label>P</label>
            <input name="tamanho[]" class="tamanho" type="checkbox" value="m"/>
            <label>M</label>
            <input name="tamanho[]" class="tamanho" type="checkbox" value="g"/>
            <label>G</label>
            <input name="tamanho[]" class="tamanho" type="checkbox" value="gg"/>
            <label>GG</label>
            <input name="tamanho[]" class="tamanho" type="checkbox" value="xg"/>
            <label>XG</label> </br></br>

            <strong>Quantidade de peças</strong> </br>
            <input type="number" name="quantidade" id="quantidade" class="select"/>
            </br></br>

            <strong>Valor</strong>
            <input type="text" name="valor" id="valor" class="select"/>

        <button type="submit" id="submit">Salvar</button>
    </form>
</div>

<script src="{{ asset('assets/jquery.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#all').click(function(){
            $('.cor').prop('checked', this.checked);
        });
        $('#alltamanho').click(function(){
            $('.tamanho').prop('checked', this.checked);
        });

        $('#submit').click(function(event) {
            var quant = $('#quantidade').val();
            if (quant > 0) {
                var tamanho = $('.tamanho:checked').length;
                var cor = $('.cor:checked').length;

                if(tamanho > 1 || cor > 1) {
                    event.preventDefault();
                    alert('Ao escolher a quantidade da peça, escolha apenas um tamanho e uma cor');
                }
            }
        });
    });
</script>
</body>
</html>
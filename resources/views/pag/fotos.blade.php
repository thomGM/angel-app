<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/addFotos.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-multiselect.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
@include('components.menu')

<div>
    <h1> Incluir novas fotos </h1></br>

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
        <option>EXEMPLO</option>
    </select></br>
    <strong>Descrição</strong></br>
    <textarea id="texto" name="texto" rows="4" cols="50"></textarea></br>
    <strong> Anexar foto </strong></br>
    <input type="file" name="foto"></br></br>
    <strong>Cores</strong></br>
    <select id="cor" multiple>
        <option value="1">Branco</option>
        <option value="2">Preto</option>
        <option value="3">Vermelho</option>
        <option value="4">Azul</option>
        <option value="5">Cinza</option>
        <option value="6">Marron</option>
        <option value="7">Amarelo</option>
        <option value="8">Verde</option>
        <option value="9">Laranja</option>
        <option value="10">Roxo</option>
        <option value="11">Rosa</option>
    </select>
</div>

<script src="{{ asset('assets/jquery.js') }}"></script>
<script src="{{ asset('assets/bootstrap-multiselect.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#cor').multiselect({
            includeSelectAllOption: true,
            buttonWhidth: "200px"
        });
    });
</script>
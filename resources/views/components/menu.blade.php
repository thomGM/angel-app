<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/menu.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>Menu</title>
</head>
<body>
        <div class="capa">
            <span class="angel">Angel Modas</span>
        </div>
        <div  class="menu">
            <div class="opcao" id="feminino">
                Feminino
                <div class="submenu">
                    <span class="menuOp">Opção 1</span></br>
                    <span class="menuOp">Opção 2</span></br>
                    <span class="menuOp">Opção 3</span>
                </div>
            </div>
            <div class="opcao" id="masculino">
                Masculino
                <div class="submenu1">
                    <span class="menuOp">Opção 1</span></br>
                    <span class="menuOp">Opção 2</span></br>
                    <span class="menuOp">Opção 3</span>
                </div>
            </div> 
            <span class="opcao">Calçados e Acessorios</span> 
            <span class="opcao"> Ofertas</span> 
            <span class="opcao">Lançamentos</span> 
            <div class="conta" id="conta">
                Conta
                <div class="submenu2">
                <span class="menuOp"><a href="{{ route('pag.login') }}" class="link">Entrar</a></span></br>
                    <span class="menuOp"><a href="{{ route('pag.fotos') }}">roupas</a></span></br>
                    <span class="menuOp">Opção 3</span>
                </div>
            </div>
        </div>

        <script src="{{ asset('assets/jquery.js') }}"></script>
        <script src="{{ asset('js/menu.js') }}"></script>

</body>
</html>
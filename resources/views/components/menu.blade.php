<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/menu.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Menu</title>
</head>
<body>
        <div class="capa">
            <span class="angel">Angel Modas</span>
        </div>
        <div class="linha"></div>
        <div  class="menu">
            <div class="opcao" id="feminino">
                Feminino
                <div class="submenu">
                    <span class="menuOp"><a href="{{ route('roupas.femininoCamisas') }}" class="link">Camisas</a></span></br>
                    <span class="menuOp">Calça</span></br>
                    <span class="menuOp">Casaco</span>
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
                    <span class="menuOp"><a href="{{ route('pag.carrinho') }}">Carrinho</a></span>
                </div>
            </div>
        </div>
        <div class="menu1">
            <div class="menu-icon" id="menu-icon">&#9776;</div>
            <ul class="elementos" id="elementos">
            <li class="font">
                <a href="#">
                    <i class="fas fa-user"></i> Conta
                </a>
            </li>
                <li class="font">Feminino <i class="fas fa-chevron-down"></i></li>
                <li class="font">Masculino <i class="fas fa-chevron-down"></i></li>
                <li class="font">Calçados e Acessorios <i class="fas fa-chevron-down"></i></li>
                <li class="font">Ofertas <i class="fas fa-chevron-down"></i></li>
                <li class="font">Lançamentos <i class="fas fa-chevron-down"></i></li>
            </ul>
        </div>

        <script src="{{ asset('assets/jquery.js') }}"></script>
        <script src="{{ asset('js/menu.js') }}"></script>

</body>
</html>
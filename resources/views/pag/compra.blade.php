<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/compra.css') }}" rel="stylesheet">
    <title></title>
</head>
<body topmargin="0" leftmargin="0">
    <header>
        @include('components.menu')
    </header>

    @foreach($data as $data)
    <div class="divpai">
        <img src="{{ asset('storage/img/' . $data->img) }}" alt="img" class="img"></br>
    </div>
    <div class="texto">
        <span class="descricao">{{$data->descricao}}</span></br>
        <span class="valor">R$ 100,00</span></br>
        <spam class="descricaoRoupa">Um elegante vestido preto, adornado com delicados detalhes de renda ao longo do decote e das mangas. Sua silhueta ajustada realça as curvas femininas, enquanto a saia esvoaçante adiciona um toque de movimento gracioso. Ideal para ocasiões especiais, este vestido combina sofisticação e charme com uma dose de estilo atemporal.
        </spam>    
    @endforeach
        <form method="POST" action="{{ route('carrinho.adicionar') }}">
        @csrf
            <input type="hidden" name="id_roupa" value="{{$data->id_roupa}}">
            <div class="divfilho">
                <button type="submit" id="comprar" class="botao">Comprar</button>
            </div>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body topmargin="0" leftmargin="0">
    <header>
        @include('components.menu')
    </header>

        <strong>MINHA SACOLA - ITENS ()</strong>
        
        <div>
            <table>
                <tr>
                    <th>PRODUTO</th>
                    <th>CARACTERISTICAS</th>
                    <th>QUANTIDADE</th>
                    <th>TOTAL</th>
                    <th></th>
                </tr>
                @foreach ($roupas as $roupa)
                <tr>
                    <td>{{ $roupa->descricao }}</td>
                    <td>ver depois</td>
                    <td><input type="number"  min="1" value="1" id="quantidade_{{$roupa->id_carrinho}}" name="quantidade"/></td>
                    <td>
                        <div id="valor_{{$roupa->id_carrinho}}">{{ $roupa->valor }}</div>
                        <input type="hidden"  id="val_{{$roupa->id_carrinho}}" name="val" value="{{ $roupa->valor }}"/>
                    </td>
                    <td><input type="button" id="excluir_{{$roupa->id_carrinho}}" name="excluir" value="X"/></td>
                </tr>
                @endforeach
            </table>
        </div>
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="{{ asset('js/carrinho.js') }}"></script>
</body>
</html>
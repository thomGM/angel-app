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
        <span class="valor">{{$data->descricao}}</span></br>
        <spam class="descricaoRoupa">{{ $data->descricaoDetalhada }}</spam>

        @php
            $tamanho = explode(',', $data->tamanho);
            $cores = explode(',', $data->cores);
        @endphp
    @endforeach
        <form name="submitCompra">
        @csrf
            <select name="tamanho">
                @foreach($tamanho as $tam)
                    <option value="{{$tam}}">{{strtoupper($tam)}}</option>
                @endforeach
            </select> 
            <select name="cor">
                @foreach($cores as $cor)
                    <option value="{{$cor}}">{{$cor}}</option>
                @endforeach
            </select>
            <input type="hidden" name="id_roupa" value="{{$data->id_roupa}}">
            <div class="divfilho">
                <button type="submit" id="comprar" class="botao">Comprar</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="{{ asset('assets/jquery_form.js') }}"></script>
    <script src="{{ asset('js/compra.js') }}"></script>
    <script>
        $(function(){
            $('form[name="submitCompra"]').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "{{ route('carrinho.verifyLogin') }}",
                    type: "post",
                    data: $(this).serialize(),
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
            });
        });
    </script>
</body>
</html>
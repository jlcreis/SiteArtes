@extends ('publico.bem_vindo')
@section ('conteudo')

@foreach ($produtos as $p)
        <tr>
            <td>{{$p->nome}}</td>
            <td><div class="money">{{$p->valor}}</div></td>
            <td>{{$p->quantidade}}</td>
        </tr>
        @endforeach


@stop
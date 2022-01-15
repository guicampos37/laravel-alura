@extends('layout')

@section('cabecalho')

Séries

@endsection


@section('conteudo')

@if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
@endif

<a href="{{ route('form_criar_serie') }}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($series as $serie)
        {{-- {{ }} é o nosso php com o blade --}}
        <li class="list-group-item d-flex justify-content-between align-items-center">{{ $serie->nome }}
            <form method="post" action="/series/{{ $serie->id }}" 
                onsubmit="return confirm('Tem certeza que deseja remover {{ $serie->nome }}?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
        </li>
    @endforeach
</ul>

@endsection
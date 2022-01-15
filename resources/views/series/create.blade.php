@extends('layout')

@section('cabecalho')

Adicionar série

@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        
<!-- FORMULÁRIO -->

<form method="post" action="">
    {{-- Token de verificação --}}
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>

@endsection
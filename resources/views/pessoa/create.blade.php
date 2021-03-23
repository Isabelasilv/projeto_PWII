@extends('layouts.app')
@section('content')
<div class="container">

         {{-- @if($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $message)
                    <p>{{ $message}}</p>
                @endforeach
            </div>
        @endif --}}

       <form id="frmpessoa" name="frmpessoa" action="{{ route('pessoa.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" id="nome" name="nome" placeholder="Informe o nome">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('nome', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control {{ $errors->has('sobrenome') ? 'is-invalid' : '' }} " id="sobrenome" name="sobrenome"  placeholder="Informe o Sobrenome">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('sobrenome', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>

          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }} "  id="telefone" name="telefone"  placeholder="Informe o Telefone">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('telefone', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection

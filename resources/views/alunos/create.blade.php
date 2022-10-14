@extends('alunos.layout')

@section('content')

<style>
    body{
    background-color: white;
}

.image{
    height: 60%;
}

.title{
    font-size: xx-large;
    color: rgb(249,50,44)
}

.laravelred{
    color: rgb(249,50,44)
}

.subtexto{
    font-size: large;
    
}
</style>
<br>

<div class = "row">
    <div class = "col-lg-12 margin-tb">
        <div class = "pull-left">
            <h2>Adicionar novo aluno</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route ('alunos.index') }}"> Voltar</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erro:</strong> deu ruim.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('alunos.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RA:</strong>
                <input type="number" name="RA" class="form-control" placeholder="RA">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary my-4">Enviar</button>
        </div>
    </div>

</form>

@endsection
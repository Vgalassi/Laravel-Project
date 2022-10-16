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
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar aluno</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('alunos.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alunos.update',$aluno->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $aluno->nome }}" class="form-control" placeholder="nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RA:</strong>
                    <input type="number" name="RA" value="{{ $aluno->RA }}" class="form-control" placeholder="RA">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Filmes:</strong>
                    <textarea class="form-control" style="height:150px" name="filmes" placeholder="Filmes">{{ $aluno->filmes }}</textarea>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center my-3">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </form>
@endsection
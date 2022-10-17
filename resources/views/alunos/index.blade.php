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
        <div class="col-lg-12">
            <div class="pull-left">
                <h2 class="laravelred my-2">Tabelas de Alunos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success my-3" href="{{ route('alunos.create') }}"> Adicione novo aluno</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>RA</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($alunos as $aluno)
        <tr>
            <td>{{ $aluno->id }}</td>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->RA }}</td>
            <td>
                <form action="{{ route('alunos.destroy',$aluno->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('alunos.show',$aluno->id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ route('alunos.edit',$aluno->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach

</table>
{{ $alunos->links() }}



@endsection
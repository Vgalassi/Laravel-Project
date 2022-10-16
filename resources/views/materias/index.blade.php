@extends('materias.layout')

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
                <h2 class="laravelred my-2">Tabelas de materias</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success my-3" href="{{ route('materias.create') }}"> Adicione nova materia</a>
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
            <th>mat_id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($materias as $materia)
        <tr>
            <td>{{ $materia->id }}</td>
            <td>{{ $materia->nome }}</td>
            <td>{{ $materia->mat_id }}</td>
            <td>
                <form action="{{ route('materias.destroy',$materia->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('materias.show',$materia->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('materias.edit',$materia->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

</table>
{{ $materias->links() }}



@endsection
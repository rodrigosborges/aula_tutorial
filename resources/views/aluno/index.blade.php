@extends('template.main')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Prontuário</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($data['alunos'] as $aluno)
            <tr>
                <td>{{$aluno->nome}}</td>
                <td>{{$aluno->prontuario}}</td>
                <td>
                    <a class="btn btn-warning" href='{{ url("aluno/$aluno->id/edit") }}'>Editar</a> 
                    <form action="{{url('aluno', [$aluno->id])}}" method="POST">
                        {{method_field('DELETE')}}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ url('aluno/create') }}">Novo aluno</a>
@endsection
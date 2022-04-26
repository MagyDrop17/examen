@extends('casals.main_master')
@section('content')

    <table class="table table-dark">

        <tr>
            <th>Nom</th>
            <th>Data de Inici</th>
            <th>Data de Fi</th>
            <th>Num Places</th>
            <th>Ciutat</th>
            <th>Accions</th>
        </tr>



        @foreach ($casals as $casal)
        <tr>
            <td>{{ $casal->nom }}</td>
            <td>{{ $casal->data_inici }}</td>
            <td>{{ $casal->data_final }}</td>
            <td>{{ $casal->n_places }}</td>
            <td>{{ $casal->ciutat->nom }}</td>
            <td>
                <div><a href="{{ route('eliminar',$casal->id) }}">Eliminar</a></div>
                <div><a href="{{ route('editar',$casal->id) }}">Editar</a></div>
            </td>
        </tr>
        @endforeach



    </table>

@endsection
@extends('casals.main_master')
@section('content')

    <form method="POST" action="{{ route('store') }}" class="d-flex flex-column justify-content-left align-items-left w-75">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Nom" required/>
        </div>

        <div class="form-group">
            <label for="data_inici">Data Inici</label>
            <input type="date" class="form-control" name="data_inici" placeholder="date" required/>
        </div>

        <div class="form-group">
            <label for="data_final">Data Final</label>
            <input type="date" class="form-control" name="data_final" placeholder="date" required/>
        </div>

        <div class="form-group">
            <label for="n_places">Num Places</label>
            <input type="integer" class="form-control" name="n_places" placeholder="50" required/>
        </div>

        <div class="form-group">
            <label for="ciutat_id">Ciutat</label>
            <select class="form-control" name="ciutat_id">
                @foreach ($ciutat as $ciu)
                    <option value="{{ $ciu->id }}">{{ $ciu->nom }}</option>
                @endforeach
            </select>
        </div>

            <input type="submit" class="btn btn-primary" role="button" value="Afegeix"></input>
    </form>
    

@endsection
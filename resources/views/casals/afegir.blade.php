@extends('casals.main_master')
@section('content')

    <form method="POST" action="{{ route('store') }}" class="d-flex flex-column justify-content-left align-items-left w-75">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Nom" required/>
            @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="data_inici">Data Inici</label>
            <input type="date" class="form-control" name="data_inici" placeholder="date" required/>
            @error('data_inici')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="data_final">Data Final</label>
            <input type="date" class="form-control" name="data_final" placeholder="date" required/>
            @error('data_final')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="n_places">Num Places</label>
            <input type="integer" class="form-control" name="n_places" placeholder="50" required/>
            @error('n_places')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="ciutat_id">Ciutat</label>
            <select class="form-control" name="ciutat_id">
                @foreach ($ciutat as $ciu)
                    <option value="{{ $ciu->id }}">{{ $ciu->nom }}</option>
                @endforeach
            </select>
            @error('ciutat_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

            <input type="submit" class="btn btn-primary" role="button" value="Afegeix"></input>
    </form>
    

@endsection
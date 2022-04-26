@extends('casals.main_master')
@section('content')

    <form method="POST" action="{{ route('edited') }}" class="d-flex flex-column justify-content-left align-items-left w-75">
        @csrf

        <input type="hidden" name="id" value="{{$casal->id}}">

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{$casal->nom}}" required/>
        </div>

        <div class="form-group">
            <label for="data_inici">Data Inici</label>
            <input type="date" class="form-control" name="data_inici" placeholder="date" value="{{$casal->data_inici}}" required/>
        </div>

        <div class="form-group">
            <label for="data_final">Data Final</label>
            <input type="date" class="form-control" name="data_final" placeholder="date" value="{{$casal->data_final}}" required/>
        </div>

        <div class="form-group">
            <label for="n_places">Num Places</label>
            <input type="integer" class="form-control" name="n_places" placeholder="50" value="{{$casal->n_places}}" required/>
        </div>

        <div class="form-group">
            <label for="ciutat_id">Ciutat</label>
            <select class="form-control" name="ciutat_id">
                @foreach ($ciutat as $ciu)

                    @if($ciu->id == $casal->ciutat_id)
                        <option value="{{ $ciu->id }}" selected>{{ $ciu->nom }}</option>
                    @else
                        <option value="{{ $ciu->id }}">{{ $ciu->nom }}</option>
                    @endif
                @endforeach
            </select>
        </div>

            <input type="submit" class="btn btn-primary" role="button" value="Afegeix"></input>
    </form>
    

@endsection
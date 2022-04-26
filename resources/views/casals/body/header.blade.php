<header>
    <p class="h1">Casals de la Generalitat de Catalunya</p>
    <p class="text-center">Gestió de Casals
        @if (Route::current()->getName() == 'afegir')
            
        @else
            <a href="{{ route('afegir') }}" class="btn btn-dark float-right">Afegir</a>
        @endif
    </p>    
</header>
<x-layout>
    
    <header class="header">
        <div class="container h-100">

    {{-- * Componente per visualizzare messaggi di errore --}}    
            <x-display-messages/>

            <div class="row justify-content-center align-items-center h-100">
                <div class="col12 col-md-6">
                    <h1 class="text-center">Inserisci un nuovo prodotto</h1>
                    <h3 class="text-center">Oppure</h3>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('homepage')}}" class="btn btn-secondary btn-lg mt-2" role="button" aria-disabled="true">Torna alla Home</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    {{-- * Componente per errori di validazione --}}    
    <x-display-errors/>

    
    <!-- Create Post Form -->
    
    <x-form/>
    
</x-layout>
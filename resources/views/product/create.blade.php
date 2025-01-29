<x-layout>
    
    <header class="header">
        <div class="container h-100">
            @if (@session()->has('successMessage'))
            <div class="alert alert-success">
                {{session('successMessage')}}
            </div>
            @endif
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
    
    {{-- *! Snippet codice per errori di validazione --}}
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <!-- Create Post Form -->
    
    <x-form/>
    
</x-layout>
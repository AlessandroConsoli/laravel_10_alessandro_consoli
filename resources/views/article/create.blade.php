<x-layout>
    
    <header class="header">
        <div class="container h-100">

    {{-- * Componente per visualizzare messaggi di errore --}}    
            <x-display-messages/>

            <div class="row justify-content-center align-items-center h-100">
                <div class="col12 col-md-6">
                    <h1 class="text-center">Inserisci un nuovo articolo</h1>
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

        
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col12 col-md-6">
                <form class="rounded-4 shadow bg-secondary-subtle p-4" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo articolo</label>
                        <input name="title" type="text" value="{{old('title')}}" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo articolo</label>
                        <input name="subtitle" type="text" value="{{old('subtitle')}}" class="form-control" id="subtitle">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{old('subtitle')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci Immagine (Facoltativo)</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
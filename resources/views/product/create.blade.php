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


    
    
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col12 col-md-6">
                <form class="rounded-4 shadow bg-secondary-subtle p-4" action="{{route('product.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del prodotto</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del prodotto</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto</label>
                        <div class="d-flex align-items-center">
                            <input name="price" type="text" class="form-control" id="price"><span class="ms-2 fs-3">€</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea prodotto</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
<x-layout>
    
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col12 col-md-6">
                    <h1 class="text-center">Prodotti in stock</h1>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row">
            
            @foreach ($products as $product)               
            <div class="col12 col-md-4 my-2">
                <x-card :product="$product"/>
            </div>
            @endforeach
            
        </div>
    </div>
    
    
</x-layout>
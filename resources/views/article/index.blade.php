<x-layout>
    
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col12 col-md-6">
                    <h1 class="text-center">Archivio articoli</h1>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row my-5">
            
            @foreach ($articles as $article)               
            <div class="col12 col-md-4 my-2">
                {{--* Card --}}
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-subtitle">{{$article->subtitle}}</p>
                        <p class="card-text">{{$article->body}}</p>
                        <a href="{{route('article.show', compact('article') )}}" class="btn btn-primary">Vai all'articolo completo</a>
                    </div>
                </div>
                                
            </div>
            @endforeach
            
        </div>
    </div>
    
    
</x-layout>
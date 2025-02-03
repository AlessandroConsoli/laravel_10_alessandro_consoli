<x-layout>


    <div class="card text-center">
        <div class="card-header text-info fs-1">
            Articolo {{$article->id}}   
        </div>
        <div class="card-body">
        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->body}}</p>
        </div>
        <div class="card-footer text-body-secondary">
          2 ore fa
        </div>
      </div>
    
    
</x-layout>
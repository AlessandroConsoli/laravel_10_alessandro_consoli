<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.index')}}">Prodotti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Archivio articoli</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.store')}}">Inserisci un nuovo prodotto</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Inserisci un nuovo articolo</a>
          </li>           
          @endauth

{{--? condizione per nascondere i tasti "registrati" ed "accedi" se il valore Auth::user() è diverso da vuoto (ovvero False) --}}
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
          </li>
          @endguest              

{{--? condizione per nascondere il tasto logout se il valore Auth::user() è True --}}
          @auth       
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button class="nav-link" type="submit">Logout</button>
            </form>
          </li>
          <li class="nav-item nav-user">
            <a class="nav-link text-info" href="#">Ciao {{Auth::user()->name}}!</a>
          </li>
          @endauth          
        </ul>
      </div>
    </div>
  </nav>
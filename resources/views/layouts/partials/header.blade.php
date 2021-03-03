

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}" class="{{request()->routeIs('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="{{route('productos.index')}}" class="{{request()->routeIs('productos.*') }}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}" class="{{request()->routeIs('productos.*') }}">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('register')}}" class="{{request()->routeIs('productos.*') }}">register</a>
          </li>
          

        </ul>
      </div>
    </div>
  </nav>
</header>
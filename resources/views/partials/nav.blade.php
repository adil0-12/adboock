<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js
">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css
" rel="stylesheet" />

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">social network</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
               

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('new') }}">create profile</a>
                    </li>
                @endguest




                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profiles.index') }}">profiles</a>
                </li>

            </ul>
            {{-- <li class="nav-item dropdown">
                <button class="btn btn-expand dropdown-toggle" data-bs-toggle="dropdown" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                  Dropdown
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li> --}}
            @auth
                
            <div class="btn-group">
                <button type="button" class="btn btn-expand dropdown-toggle" data-bs-toggle="dropdown" >
                  {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                  <li><a class="dropdown-item" href="{{ route('settings') }}">Settings</a></li>
                  
                  
                </ul>
              
            </div>
              @endauth  

            

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</nav>

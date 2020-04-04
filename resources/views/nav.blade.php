<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-rs-food">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link  {{Request::is('/') ? 'active' : ''}}" href="/">Accueil</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Articles</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        @can('Create Article')<a class="dropdown-item" href="{{ route('articles.create') }}">Creation Article</a>@endcan
                        @can('List Article')<a class="dropdown-item" href="{{ route('articles.index') }}">List Article</a>@endcan
                    </div>
                </li>
                @if(!Auth::guest())
                    <li class="nav-item"><a class="nav-link {{Request::is('commandes') ? 'active' : ''}}" href="{{ route('commandes.index') }}">List Commande</a></li>
                @endif
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>

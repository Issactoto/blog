<html>
    <head>
        <link rel ="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
        @if(session('status'))
            <div class='alert alert-success'>
                {{session('status')}}
            </div>
        @endif
    
        <body>
        <div class='d-flex flex-column flex-md-row align-items-center p-3 px-md-4
        white border-bottom shadow-sm'>
            <h5 class ="my-0 mr-md-auto font-weight-normal">Issac's Blog<h5>
            <nav class ="my-2 my-md-1 mr-md-3" style="display: inline-block;">
                <a  class = ' p-2 ' href="{{route('home.index')}}">Home</a>
                <a  class = ' p-2 ' href="{{route('home.contact')}}">Contact</a>
                <a  class = ' p-2 ' href="{{route('posts.index')}}">Blog Posts</a>
                <a  class = ' p-2 ' href="{{route('posts.create')}}">Add Blog Posts</a>
                
            </nav>

            <div  class ="my-2 my-md-1 mr-md-3" style="display: inline-block;">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('register'))
                <a class="p-2 " href="{{ route('register') }}" style="display: inline-block;">{{ __('Register') }}</a>
                    @endif
                @if (Route::has('login'))
                    <a class="p-2 " href="{{ route('login') }}" style="display: inline-block;">{{ __('Login') }}</a>
                @endif
                       
                @else
                    <div class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </div>                
                
                
                    
             </div>
             <div class = ' p-4 box '>
                 <h1>@yield('title')</h1>
                @yield('content')
             </div>
        </body>

</html>
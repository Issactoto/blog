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
                <h5 class ="my-0 mr-md-auto font-weight-normal">My Table tennis players<h5>
                <nav class ="my-2 my-md-0 mr-md-3">
                    <a  class = ' p-2 ' href="{{route('home.index')}}">Home</a>
                    <a  class = ' p-2 ' href="{{route('home.contact')}}">Contact</a>
                    <a  class = ' p-2 ' href="{{route('posts.index')}}">Blog Posts</a>
                    <a  class = ' p-2 ' href="{{route('posts.create')}}">Add Blog Posts</a>
                </nav>
             </div>
             <div class = ' p-4 '>
                 <h1>@yield('title')</h1>
                @yield('content')
             </div>
        </body>

</html>
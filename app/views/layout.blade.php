<!DOCTYPE html>
<html>
    <head>
        <title>LARAVEL Authentication</title>
    </head>
    <body>
        <div>
            @if(Session::has("message"))
            <p>{{Session::get("message")}}</p>
            @endif
        </div>
        <div>
            @yield('content')
        </div>
    </body>
</html>
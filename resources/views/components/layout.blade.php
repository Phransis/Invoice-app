<!DOCTYPE html>
<html>
    <head>
        <title>Invoce App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> 
    </head>
    <body>
        @if (session('status'))
            <div> {{session('status')}} </div>
        @endif
        {{ $slot }}
    </body>
</html>
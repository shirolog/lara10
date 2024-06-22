<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style type="text/css">
       body 
       {
        font-family: "Hiragino Kaku Gothic ProN","Hiragino Sans",Meiryo,sans-serif;
        margin-top: 10px !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="font-size: 1.75rem;">Laravelシステム</h1>
        @yield('content')
        <div><a href="{{url('./dashboard')}}">dashboard</a></div>
    </div>    
</body>
</html>
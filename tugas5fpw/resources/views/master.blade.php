<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <div class="container">
            <a class="navbar-brand" href="/game">
                <b class="text-white">Data Game </b>
            </a>
        </div>
    </nav>
    <div class="card"><img class="card-img-top" style="height:150px;" src="https://wallpaperaccess.com/full/1761712.jpg" alt="Card image cap"></div>
    @yield('content')
</body>

</html>
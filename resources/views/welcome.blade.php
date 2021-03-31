<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="{{url('https://www.flaticon.com/svg/vstatic/svg/1243/1243420.svg?token=exp=1617184866~hmac=74b03d0ac363196d26c0fe4d2593fd06')}}" type="image/x-icon">
    <title>Menu</title>
</head>
<body>

    <header>
        <nav>
            <div class="nav-wrapper purple">
                <a href="#" class="brand-logo center">Menú</a>
            </div>
        </nav>
    </header>

    <main>
        <center>
            <br />

            <a class="waves-effect black btn-large" href="{{route('news.index')}}">News</a>
    
            <a class="waves-effect black btn-large" href="{{route('books.index')}}">Books</a>
        </center>
    </main>

    
</body>
</html>
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
    <link rel="shortcut icon" href="{{url('https://www.flaticon.com/svg/vstatic/svg/2965/2965879.svg?token=exp=1617185093~hmac=1ff55eaeed60e559759dcbe24f523352')}}" type="image/x-icon">
    <title>News</title>
</head>
<body>
    <header>
        <a class="waves-effect black btn" href="{{route('news.index')}}"><i class="material-icons right">cloud</i>Regresar</a></li>
    </header>

    <main>
        <h3>{{$news->title}}</h3>
        <figure>
            @if ($news->image)
            <img src="{{$news->get_image}}" alt="Imagen" width="300" height="300"/>
            @else
            <img src="https://images.unsplash.com/photo-1580656449548-a2278870021d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=709&q=80" alt="Imagen" />
            @endif 
        </figure>
        <p>
            {{$news->description}}
        </p>
    </main>
</body>
</html>
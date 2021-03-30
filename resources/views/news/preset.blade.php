<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('/css/news/index.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('/storage/iconos/world.ico')}}" type="image/x-icon">
    <title>Document</title>
</head>
<body>

    <header>
        <nav>
            <div class="nav-wrapper purple">
                <a href="#" class="brand-logo center">Buscar Noticia</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a class="waves-effect amber btn" href="{{ route('news.index') }}"><i class="material-icons left">cloud</i>Volver</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="row">
        <form action="{{ route('news.search') }}" method="GET">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">topic</i>
                    <select name="topic" id="label">
                        <option value="" disabled selected>Elige</option>
                        <option value="Actualidad">Actualidad</option>
                        <option value="Internacional">Internacional</option>
                        <option value="Otros">Otros</option>
                    </select>
                    <label for="topic">Etiqueta</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">title</i>
                    <input name="title" placeholder="Titulo" type="text" name="" id="title" />
                    <label for="title">Titulo</label>
                </div>
                <center>
                    <button class="btn waves-effect amber" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </center>
            </div>
      </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        const labelNews = document.getElementById("label");

        document.addEventListener("DOMContentLoaded", function() {
            const elems = document.querySelectorAll("select");
            M.FormSelect.init(elems, labelNews);
        });

    </script>
</body>
</html>
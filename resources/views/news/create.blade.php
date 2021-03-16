<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    {{-- <link rel="stylesheet" href="../css/"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>News</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper purple">
              <a href="#" class="brand-logo center">Crear Noticia</a>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="{{ route('news.index') }}">Noticias</a></li>
              </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">title</i>
                <input placeholder="Coloca el título de la noticia" id="title" type="text" class="validate">
                <label for="title">Título</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">subtitles</i>
                <input placeholder="Coloca el subtítulo de la noticia" id="subtitle" type="text" class="validate">
                <label for="subtitle">Subtítulo</label>
            </div>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">textsms</i>
                        <textarea id="description" class="materialize-textarea" data-length="120"></textarea>
                        <label for="description">Descripción</label>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="input-field col s4">
                <i class="material-icons prefix">format_list_numbered</i>
                <input placeholder="Ingresa tu edad" type="number" name="" id="age" class="validate" />
                <label for="age">Imagen</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">topic</i>
                <select id="label">
                    <option value="" disabled selected>Elige</option>
                    <option value="H">Hombre</option>
                    <option value="M">Mujer</option>
                    <option value="N/A">N/A</option>
                </select>
                <label>Etiqueta</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">format_shapes</i>
                <input placeholder="Ingresa tu peso en kg" type="number" name="" id="weight" class="validate" />
                <label for="age">Peso</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s10">
                <i class="material-icons prefix">people</i>
                <select id="gender">
                    <option value="" disabled selected>Elige</option>
                    <option value="H">Hombre</option>
                    <option value="M">Mujer</option>
                    <option value="N/A">N/A</option>
                </select>
                <label>Sexo</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">date_range</i>
                <input placeholder="Reserva la fecha" type="date" name="" id="date" class="validate">
                <label for="date">Fecha a reservar</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">watch_later</i>
                <input placeholder="Indica la hora" type="time" name="" id="time">
                <label for="time">Hora</label>
            </div>
        </div>
        
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">drafts</i>
                        <textarea id="description" class="materialize-textarea"></textarea>
                        <label for="description">Descripcion de la consulta</label>
                    </div>
                </div>
            </form>
        </div>
    </main>
      <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    {{-- <script>
        const labelNews = document.getElementById("label");

document.addEventListener("DOMContentLoaded", function () {
    const elems = document.querySelectorAll("select");
    M.FormSelect.init(elems, labelNews);
});
    </script> --}}
    <script src="/resources/js/createNotice.js"></script>
</body>
</html>
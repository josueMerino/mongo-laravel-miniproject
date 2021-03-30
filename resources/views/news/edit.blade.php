<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('/css/news/news.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('/storage/iconos/world.ico')}}" type="image/x-icon">
    <title>News</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper purple">
                <a href="#" class="brand-logo center">Editar Noticia</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="{{ route('news.index') }}">Noticias</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="box">
            @if ($errors->any())
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card-panel  red ">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            <div class="box1">
                <div class="row">
                    <form action="{{ route('news.update', $news) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">title</i>
                                <input name="title" placeholder="Coloca el título de la noticia" id="title" type="text" class="validate" value="{{old('title', $news->title)}}" />
                                <label for="title">Título</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">subtitles</i>
                                <input name="subtitle" placeholder="Coloca el subtítulo de la noticia" id="subtitle" type="text" class="validate" value="{{old('subtitle', $news->subtitle)}}">
                                <label for="subtitle">Subtítulo</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">topic</i>
                                <select name="topic" id="label">
                                    <option value="{{old('title', $news->title)}}" disabled selected>Elige otro si prefieres...</option>
                                    <option value="Actualidad">Actualidad</option>
                                    <option value="Internacional">Internacional</option>
                                    <option value="Otros">Otros</option>
                                </select>
                                <label for="topic">Etiqueta</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">format_shapes</i>
                                <input name="author" placeholder="Autor" type="text" name="" id="author" class="validate" value="{{old('author', $news->author)}}"/>
                                <label for="author">Autor</label>
                            </div>
                        </div>

                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">textsms</i>
                                        <textarea name="description" id="description" class="materialize-textarea" data-length="120">{{old('title', $news->title)}}</textarea>
                                        <label for="description">Descripción</label>
                                    </div>
                                </div>
                            </form>
                            <center>
                                <button class="btn waves-effect amber" type="submit">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    {{-- <script src="{{asset('/resources/js/app.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        const labelNews = document.getElementById("topic");

        document.addEventListener("DOMContentLoaded", function() {
            const elems = document.querySelectorAll("select");
            M.FormSelect.init(elems, labelNews);
        });

    </script>
</body>

</html>
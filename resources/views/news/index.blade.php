<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ url('/css/news/index.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('https://www.flaticon.com/svg/vstatic/svg/2965/2965879.svg?token=exp=1617185093~hmac=1ff55eaeed60e559759dcbe24f523352')}}" type="image/x-icon">
    <title>News</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper purple">
                <a href="#" class="brand-logo center">Noticias</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a class="waves-effect amber btn" href="{{ route('news.preset') }}"><i class="material-icons left">search</i>Buscar</a></li>
                  <li><a class="waves-effect amber btn" href="{{ route('news.create') }}"><i class="material-icons left">cloud</i>Crear Noticia</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main>
      @if ($message = Session::get('success'))
        <div class="row">
          <div class="col s12 m4">
              <div class="card-panel green darken-4">
                <p>{{ $message }}</p>
              </div>
          </div>
        </div>
      @endif
      
      
      <div class="container">
        
        @foreach ($news as $notice)
          <div class="row">
            <div class="col s12 m7">
              <div class="card small" style="width: 300px;">
                <div class="card-image" >
                  @if ($notice->image)
                  <img src="{{ $notice->get_image }}" alt="A"/>
                  @else
                  <img src="https://images.unsplash.com/photo-1580656449548-a2278870021d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=709&q=80" alt="Imagen" />
                  @endif
                  <span class="card-title">{{$notice->title}}</span>
                </div>
                <div class="card-content">
                  <p>{{$notice->topic}}</p>
                </div>
                <div class="card-action">
                  <form action="{{ route('news.destroy',$notice->id) }}" method="POST">
                    <a class="waves-effect waves-light btn" href="{{ route('news.show',$notice->id) }}">Show</a>
                    <a class="waves-effect waves-light btn" href="{{ route('news.edit',$notice->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button
                    type="submit"
                    class="waves-effect red btn"
                    onclick="return confirm('??Deseas eliminar esta noticia?')">
                    Delete
                    </button>
                </form>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </main>
        
  
    {{-- <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        ?? 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer> --}}
    
        
</body>


</html>
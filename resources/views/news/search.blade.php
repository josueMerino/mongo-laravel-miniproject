<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($posts->isNotEmpty())
    @foreach ($posts as $post)
        <div class="post-list">
            <p>{{ $post->title }}</p>
            <img src="{{ $post->image }}">
        </div>
    @endforeach
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif
</body>
</html>
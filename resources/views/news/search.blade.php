<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($news->isNotEmpty())
    @foreach ($news as $notice)
        <div class="post-list">
            <p>{{ $notice->title }}</p>
            @if ($notice->image)
                <img src="{{ $notice->get_image }}" alt="A"/>
            @else
                <img src="{{ url('/storage/newsImages/15.JPG') }}" alt="A"/>
            @endif
        </div>
    @endforeach
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif
</body>
</html>
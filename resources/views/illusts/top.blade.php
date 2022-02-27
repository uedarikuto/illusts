<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>illusts</title>
        <link href={{asset("css/top.css")}} rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <hr>
        <h1 class='title'>illusts</h1> 
        <p class='profile'><a href='/illusts/profile'>[profile]</a></p>
        <p class='create'><a href='/illusts/create'>[create]</a></p>
        <div class='illuts'>
            @foreach ($illusts as $illust)
                <div class='post'>
                    <h2 class='title'><a href="/illusts/{{ $illust->id }}">{{ $illust->title }}</a></h2>
                    <p class='body'>{{ $illust->body }}</p>
                    <p class='tag_name'>{{ $illust->tag_name }}</p>
                </div>
            @endforeach
        </div>
         <div class='paginate'>
            {{ $illusts->links() }}
        </div>
    </body>
</html>
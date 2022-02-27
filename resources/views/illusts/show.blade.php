<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>投稿</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href={{asset("css/show.css")}} rel="stylesheet">
    </head>
    <body>
        <hr>
        <h1 class='t-title'>illusts</h1> 
        <p class='profile'><a href='/illusts/profile'>[profile]</a></p>
        <h1 class="title">
            {{ $illust->title }}
        </h1>
        <div class="content">
            <div class="content__illusts">
                <p>{{ $illust->body }}</p>    
            </div>
            <div class="content__tag_name">
                <p>{{ $illust->tag_name }}</p>    
            </div>
        </div>
        <p class="edit"><a href="/illusts/{{ $illust->id }}/edit">[edit]</a></p>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
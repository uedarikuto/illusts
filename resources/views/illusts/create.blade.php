<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/illusts" method="POST">
           {{ csrf_field() }}
        <div class="title">
            <h2>Title</h2>
                <input type="text" name="illust[title]" placeholder="タイトル" value="{{ old('illust.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('illust.title') }}</p>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="illust[body]" placeholder="テキストを記入してください。">{{ old('illust.body') }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('illust.body') }}</p>
        </div>
        <input type="submit" value="保存"/>
        </form>
        <div class="back"><a href="/">[back]</a></div>
    </body>
</html>
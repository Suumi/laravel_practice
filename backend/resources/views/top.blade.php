<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>トップページ</title>
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <h1>トップページ</h1>
            <ul>
                <li><a href="{{ route('board.index') }}">掲示板</a></li>
                <li><a href="{{ route('hitblow.index') }}">HIT&BLOW</a></li>
                <li><a href="{{ route('blog.index') }}">TDD練習用ブログ開発</a></li>
            </ul>
        </div>
    </body>
</html>

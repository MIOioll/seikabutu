<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>コメント一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>コメント</h1>
       <a href="/comments/create"> <button type=“button” >コメントを投稿する</button></a>
        <div class='creates'>
             @foreach ($comments as $comment)
            <div class='create'>
                <h2 class='subject'>
                    <a href="/comments/{{ $comment->id }}">{{ $comment->title }}</a>
                </h2>
                 <p>Posted at: {{ $comment->created_at }}</p>
                <p class='body'>This is a sample body.</p>
                <p>{{ $comment->body }}</p>
                <button type=“button” onclick="/comments/return">返信</button>
                <button type=“button” onclick="/comments/reaction">リアクション</button>
                <button type=“button” onclick="/comments/threads">スレッドを表示する</button>
            </div>
             @endforeach
              <div class='paginate'>
                {{ $comments->links() }}
              </div>
        </div>
    </body>
</html>
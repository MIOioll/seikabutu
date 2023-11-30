<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comment') }}
        </h2>
    </x-slot>
        <h1>返信作成</h1>
        <form action="/comments/{{ $comment->id}}/return" method="POST">
            @csrf
            <div class="body">
                <h2>Body</h2>
                <textarea name="comment_return[body]"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </x-app-layout>
   
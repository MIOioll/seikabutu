<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comment') }}
        </h2>
    </x-slot>
        <h1>コメント</h1>
       <a href="/comments/create"> <button type=“button” class="border-4 border-indigo-500 rounded-lg bg-indigo-500 text-white p-4">コメントを投稿する</button></a>
        <div class='creates'>
             @foreach ($comments as $comment)
            <div class='create'>
                <h2 class='subject'>
                    <a href="/comments/{{ $comment->id }}">{{ $comment->title }}</a>
                </h2>
                 <p>Posted at: {{ $comment->created_at }}</p>
                <p class='body'></p>
                <p>{{ $comment->body }}</p>
                <button type=“button” onclick="/comments/return">返信</button>
                <button type=“button” onclick="/comments/reaction">リアクション</button>
                <button type=“button” onclick="/comments/threads">スレッドを表示する</button>
                <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deleteComment({{ $comment->id }})">削除</button> 
                </form>
            </div>
             @endforeach
              <div class='paginate'>
                {{ $comments->links() }}
              </div>
        </div>
        <script>
            function deleteComment(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
</x-app-layout>
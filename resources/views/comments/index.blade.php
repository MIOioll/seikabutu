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
                <div class="mt-5">
                    <a href="/comments/{{ $comment->id}}/return" class="border-2 border-teal-500 rounded-lg bg-teal-500 text-white p-2.5">返信</a>
                    <a href="/comments/reaction" class="border-2 border-yellow-500 rounded-lg bg-yellow-500 text-white p-2.5">リアクション</a>
                    <a href="/comments/threads" class="border-2 border-sky-400 rounded-lg bg-sky-400 text-white p-2.5">スレッドを表示する</a>
                    <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteComment({{ $comment->id }})" class="border-2 border-rose-400 rounded-lg bg-rose-400 text-white p-2">削除</button> 
                    </form>
                </div>
                <hr>
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
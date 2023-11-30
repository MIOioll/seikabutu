<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comment') }}
        </h2>
    </x-slot>
        <h1 class="title">
            {{ $comment->title }}
        </h1>
        <div class="content">
            <div class="content__comment">
                <h3>本文</h3>
                <p>{{ $comment->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>
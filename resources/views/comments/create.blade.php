<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comment') }}
        </h2>
    </x-slot>
        <h1>コメント作成</h1>
        <form action="/comments" method="POST">
            @csrf
            <div class="title">
                <h2>講義名</h2>
                <select name="comment[subject_id]">
                    @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">
                        {{ $subject->name }}
                        
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="comment[body]" placeholder="先生が優しい。">{{ old('comment.body') }}</textarea>
            </div>
            <div class="stars">
                <h2>評価</h2>
                <input name="comment[stars]" type="number" value="{{ old('comment.stars') }}">
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </x-app-layout>
   
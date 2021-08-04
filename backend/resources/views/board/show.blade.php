<x-layout>
    <x-slot name="title">
        {{ $post->title }} - 掲示板
    </x-slot>

    <div class="back-link">
        <a href="{{ route('board.index') }}">戻る</a>
    </div>

    <h1>{{ $post->title }}</h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
</x-layout>

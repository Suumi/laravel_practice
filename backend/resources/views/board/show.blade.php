<x-layout>
    <x-slot name="title">
        {{ $post }} - 掲示板
    </x-slot>

    <div class="back-link">
        <a href="{{ route('board.index') }}">戻る</a>
    </div>

    <h1>{{ $post }}</h1>
</x-layout>

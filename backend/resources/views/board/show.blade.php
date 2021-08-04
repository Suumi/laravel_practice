<x-layout>
    <x-slot name="title">
        {{ $post->title }} - 掲示板
    </x-slot>

    <div class="back-link">
        <a href="{{ route('board.index') }}">戻る</a>
    </div>

    <h1>
        <span>{{ $post->title }}</span>
        <a href="{{ route('board.edit', $post) }}">編集</a>
        <form method="post" action="{{ route('board.destroy', $post) }}" id="delete_post">
            @method('DELETE')
            @csrf
            <button class="btn">[x]</button>
        </form>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <script>
        'use strict';

        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

                if (!confirm('本当に削除しますか？')) {
                    return;
                }

                e.target.submit();
            });
        }
    </script>
</x-layout>

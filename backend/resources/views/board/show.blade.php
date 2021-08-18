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

    <h2>コメント</h2>
    <ul>
        <li>
            <form method="post" action="{{ route('comments.store', $post) }}" class="comment-form">
                @csrf
                <input type="text" name="body">
                <button>add</button>
            </form>
        </li>
        @foreach ($post->comments()->latest()->get() as $comment)
            <li>
                {{ $comment->body }}
                <form method="post" action="{{ route('comments.destroy', $comment) }}" class="delete-comment">
                    @method('DELETE')
                    @csrf
                    <button class="btn">[x]</button>
                </form>
            </li>
        @endforeach
    </ul>


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

            document.querySelectorAll('.delete-comment').forEach(form => {
                form.addEventListener('submit', e => {
                    e.preventDefault();

                    if (!confirm('本当に削除しますか？')) {
                        return;
                    }

                    form.submit();
                });
            });
        }
    </script>
</x-layout>

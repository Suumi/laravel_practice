<x-layout>
    <x-slot name="title">
        掲示板
    </x-slot>

    <h1>
        <span>掲示板</span>
        <a href="{{ route('board.create') }}">投稿</a>
    </h1>
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('board.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>レコードがありません</li>
        @endforelse
    </ul>
</x-layout>

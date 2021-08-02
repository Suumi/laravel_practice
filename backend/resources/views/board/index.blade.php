<x-layout>
    <x-slot name="title">
        掲示板
    </x-slot>

    <h1>掲示板</h1>
    <ul>
        @forelse ($posts as $index => $post)
            <li>
                <a href="{{ route('board.show', $index) }}">
                    {{ $post }}
                </a>
            </li>
        @empty
            <li>レコードがありません</li>
        @endforelse
    </ul>
</x-layout>

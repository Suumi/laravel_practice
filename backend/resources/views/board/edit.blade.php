<x-layout>
    <x-slot name="title">
        編集 - 掲示板
    </x-slot>

    <div class="back-link">
        <a href="{{ route('board.show', $post) }}">戻る</a>
    </div>

    <h1>編集</h1>

    <form method="post" action="{{ route('board.update', $post) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label>
                タイトル
                <input type="text" name="title" value="{{ old('title', $post->title) }}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
                本文
                <textarea name="body">{{ old('body', $post->body) }}</textarea>
            </label>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>更新</button>
        </div>
    </form>
</x-layout>

<x-layout>
    <x-slot name="title">
        投稿 - 掲示板
    </x-slot>

    <div class="back-link">
        <a href="{{ route('board.index') }}">戻る</a>
    </div>

    <h1>新規投稿</h1>

    <form method="post" action="{{ route('board.store') }}">
        @csrf
        <div class="form-group">
            <label>
                タイトル
                <input type="text" name="title" value="{{ old('title') }}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
                本文
                <textarea name="body">{{ old('body') }}</textarea>
            </label>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>投稿</button>
        </div>
    </form>
</x-layout>

<x-layout>
    <x-slot name="title">
        HIT&BLOW
    </x-slot>

    <div>
        <p>予想する数字を入力</p>
        <form action="{{ route('hitblow.result') }}" method="post">
            @csrf
            <input type="text" name="number">
            <input type="submit" value="決定">
        </form>
    </div>
    <a href="{{ route('hitblow.index') }}">戻る</a>
</x-layout>

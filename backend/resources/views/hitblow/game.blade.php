<x-layout>
    <x-slot name="title">
        HIT&BLOW
    </x-slot>

    <div>
        <p>予想する数字を入力</p>
        <input type="text">
        <button onclick="location.href='{{ route('hitblow.result') }}'">決定</button>
    </div>
    <a href="{{ route('hitblow.index') }}">戻る</a>
</x-layout>

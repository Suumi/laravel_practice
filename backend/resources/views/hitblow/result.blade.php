<x-layout>
    <x-slot name="title">
        HIT&BLOW
    </x-slot>

    <h1>1回目のチャレンジ</h1>
    <div>
        <p>HIT</p>
        <p>1</p>
        <p>BLOW</p>
        <p>2</p>
    </div>
        <div>
        <p>予想する数字を入力</p>
        <input type="text">
        <button onclick="location.href='{{ route('hitblow.result') }}'">決定</button>
    </div>
    <a href="{{ route('hitblow.index') }}">はじめから</a>
</x-layout>

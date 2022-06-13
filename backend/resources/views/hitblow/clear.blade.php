<x-layout>
    <x-slot name="title">
        HIT&BLOW
    </x-slot>

    <h1>的中！！！</h1>
    <div>
        <p>選択した数字</p>
        <p>【{{$number}}】</p>
    </div>
    <div>
        <p>的中までのチャレンジ数:{{$try}}回</p>
        <p>評価:まあまあですね</p>
    </div>
    <a href="{{ route('hitblow.index') }}">はじめから</a>
</x-layout>

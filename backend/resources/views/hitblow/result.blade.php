<x-layout>
    <x-slot name="title">
        HIT&BLOW
    </x-slot>

    <h1>1回目のチャレンジ</h1>
    <div>
        <p>選択した数字</p>
        <p>【{{$number}}】</p>
    </div>
    <div>
        <p>HIT:1</p>
        <p>BLOW:2</p>
    </div>
    <div>
        <p>次に予想する数字を入力</p>
        <form action="{{ route('hitblow.result') }}" method="post">
            @csrf
            <input type="text" name="number">
            <input type="submit" value="決定">
        </form>
    </div>
    <a href="{{ route('hitblow.index') }}">はじめから</a>
</x-layout>

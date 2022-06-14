<x-layout>
    <x-slot name="title">
        HIT&BLOW
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>{{$try}}回目のチャレンジ</h1>
    <div>
        <p>選択した数字</p>
        <p>【{{$number}}】</p>
    </div>
    <div>
        <p>HIT:{{$hit}}</p>
        <p>BLOW:{{$blow}}</p>
    </div>
    <div>
        <p>次に予想する数字を入力</p>
        <form action="{{ route('hitblow.result') }}" method="post">
            @csrf
            <input type="hidden" name="try" value="{{$try}}">
            <input type="text" name="number">
            <input type="submit" value="決定">
        </form>
    </div>
    <a href="{{ route('hitblow.index') }}">はじめから</a>
</x-layout>

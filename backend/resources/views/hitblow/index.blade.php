<x-layout>
    <x-slot name="title">
        HIT&BLOW
    </x-slot>

    <h1>
        <span>HIT&BLOW</span>
        <a href="{{ route('hitblow.game') }}">はじめる</a>
    </h1>

    <p>ルール</p>
    <ul>
        <li>出題者は重複した数を含まない4桁の数を決める</li>
        <li>回答者は4桁の数を予想する</li>
        <li>出題者は解答者の予想を判定する。数と桁の両方が同じならヒット、数だけが同じで桁が異なればブローと呼ぶ。例えば正解が1234で回答が2135なら「1ヒット、2ブロー」となる</li>
        <li>2-3を繰り返し、4桁の数が完全に同じになるまでの回数で勝負を決める</li>
    </ul>
    <a href="{{ route('top') }}">戻る</a>
</x-layout>

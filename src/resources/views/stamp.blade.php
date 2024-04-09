@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/stamp.css') }}" />
@endsection

@section('content')

<div class="greeting">
    <h2>さんお疲れ様です！</h2>
</div>
<form class="form" action="/attendance" method="post">
    @csrf
<div class="attendance__choice">
    <div class="attendance__choice1">
        <button type="submit" class="btn-choice1">勤務開始</button>
    </div>
    <div class="attendance__choice2">
        <button type="submit" class="btn-choice2">勤務終了</button>
    </div>
    <br>
    <div class="attendance__choice3">
        <button type="submit" class="btn-choice3">
        休憩開始</button>
    </div>
    <div class="attendance__choice4">
        <button type="submit" class="btn-choice4">休憩終了</button>
    </div>
</form>
</div>
@endsection
<footer>
    <div class="copyright-box">
        <p class="copyright">Atte,inc</p>
    </div>
</footer>

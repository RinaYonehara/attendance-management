@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/attendance.css') }}" />
@endsection

@section('content')

    <form class="form" action="/attendance" method="post">
        @csrf
        <tr>
            <td>名前</td>
            <td>勤務開始</td>
            <td>勤務終了</td>
            <td>休憩時間</td>
            <td>勤務時間</td>
        </tr>
</form>
@endsection


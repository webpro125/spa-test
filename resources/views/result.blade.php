@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Watch your inbox</h2>

        <p style="margin-top: 50px">Alerts are on the way to {!! $user->email !!} </p>
        <p>If you need change anything, just sign up again.</p>
    </div>
@endsection
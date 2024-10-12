@php

@endphp

@extends('layouts.base_layout')
@section('title', 'LOGIN')

@section('content')

    <div id="login-container">
        <h1>ログイン</h1>
        <form method="POST" action="{{ route('login.auth') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="login_id">ログインID</label>
                <input type="text" id="login_id" name="login_id" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">ログイン</button>
        </form>
    </div>

@endsection

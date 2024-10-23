@php

@endphp

@extends('layouts.base_layout')
@section('title', 'LOGIN')

@section('content')

    <div id="auth-container">
        <div class="change-auth">
            <h1 class="change-auth-left">ログイン</h1>
            <h3 class="change-auth-right change-auth-select"><a href="{{ route('register.index') }}" class="change-auth-a">新規登録</a></h3>
        </div>
        <form method="POST" action="{{ route('auth.login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="login_id">ログインID</label>
                <input type="text" id="login_id" name="login_id" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">ログイン</button>
        </form>
    </div>

    <script></script>
@endsection

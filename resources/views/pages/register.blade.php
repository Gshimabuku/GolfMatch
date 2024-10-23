@php

@endphp

@extends('layouts.base_layout')
@section('title', 'NEW')

@section('content')

    <div id="auth-container">
        <div class="change-auth">
            <h3 class="change-auth-left change-auth-select"><a href="{{ route('auth.index') }}" class="change-auth-a">ログイン</a></h3>
            <h1 class="change-auth-right">新規登録</a></h1>
        </div>
        <form method="POST" action="{{ route('register.new') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="login_id">ログインID</label>
                @error('login_id')
                    <span class="error" style="font-size: 12px; color: #ff0000;">{{ $message }}</span>
                @enderror
                <input type="text" id="login_id" name="login_id" value="{{ old('login_id') }}" required>
            </div>
            <div class="form-group">
                <label for="user_name">ユーザー名</label>
                @error('user_name')
                    <span class="error" style="font-size: 12px; color: #ff0000;">{{ $message }}</span>
                @enderror
                <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                @error('password')
                    <span class="error" style="font-size: 12px; color: #ff0000;">{{ $message }}</span>
                @enderror
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">パスワード確認</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="register-btn">新規登録</button>
        </form>
    </div>

@endsection

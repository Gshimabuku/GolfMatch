@php

@endphp

@extends('layouts.base_layout')
@section('title', 'HOME')
@section('header')
    <x-staff-header />
@endsection

@section('content')

    <div id="staff-home-container" class="home-container">
        <h1>Staff ホーム画面</h1>
        <div class="body-main">
            <div class="body-column">
                <button class="menu-box-item" onclick="location.href=''"><img class="menu-box-img" src="{{ asset('/images/user.png') }}" alt=""><span class="menu-box-text">User</span></button>
                <button class="menu-box-item" onclick="location.href=''"><img class="menu-box-img" src="{{ asset('/images/course.png') }}" alt=""><span class="menu-box-text">Course</span></button>
                <button class="menu-box-item" onclick="location.href=''"><img class="menu-box-img" src="{{ asset('/images/notice.png') }}" alt=""><span class="menu-box-text">Notice</span></button>
            </div>
            <div class="body-column">
                <button class="menu-box-item" onclick="location.href=''"><img class="menu-box-img" src="{{ asset('/images/ranking.png') }}" alt=""><span class="menu-box-text">Ranking</span></button>
                <button class="menu-box-item no-item" onclick="location.href=''"><img class="menu-box-img" src="" alt=""><span class="menu-box-text"></span></button>
                <button class="menu-box-item no-item" onclick="location.href=''"><img class="menu-box-img" src="" alt=""><span class="menu-box-text"></span></button>
            </div>
        </div>
    </div>

@endsection

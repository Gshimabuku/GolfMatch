@php

@endphp

@extends('layouts.base_layout')
@section('title', 'HOME')
@section('header')
    <x-guest-header />
@endsection

@section('content')

    <div id="guest-notice-list-container" class="notice-container">
        <h1>Guest お知らせ一覧</h1>
        <div class="body-main">
        </div>
    </div>

@endsection

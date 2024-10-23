@php

@endphp

@extends('layouts.base_layout')
@section('title', 'HOME')
@section('header')
    <x-guest-header />
@endsection

@section('content')

    <div id="guest-ranking-all-container" class="ranking-container">
        <h1>Guest ALLランキング</h1>
        <div class="body-main">
        </div>
    </div>

@endsection

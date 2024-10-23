@php

@endphp

@extends('layouts.base_layout')
@section('title', 'HOME')
@section('header')
    <x-guest-header />
@endsection

@section('content')

    <div id="guest-ranking-top-container" class="ranking-container">
        <h1>Guest ランキングTOP</h1>
        <div class="body-main">
        </div>
    </div>

@endsection

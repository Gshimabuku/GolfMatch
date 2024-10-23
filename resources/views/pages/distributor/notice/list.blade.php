@php

@endphp

@extends('layouts.base_layout')
@section('title', 'HOME')
@section('header')
    <x-distributor-header />
@endsection

@section('content')

    <div id="distributor-notice-list-container" class="notice-container">
        <h1>Distributor お知らせ一覧</h1>
        <div class="body-main">
        </div>
    </div>

@endsection

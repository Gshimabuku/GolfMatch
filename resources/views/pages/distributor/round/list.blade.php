@php

@endphp

@extends('layouts.base_layout')
@section('title', 'HOME')
@section('header')
    <x-distributor-header />
@endsection

@section('content')

    <div id="distributor-round-list-container" class="round-container">
        <h1>Distributor 過去ラウンド一覧</h1>
        <div class="body-main">
        </div>
    </div>

@endsection

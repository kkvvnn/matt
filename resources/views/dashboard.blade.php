@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <p>Welcome to your application dashboard!!</p>

    @include('sign-up-button', ['text' => 'BUTTON_DASHBOARD'])
@endsection

@section('footerScripts')
    @parent
    <script src="dashboard.js"></script>
@endsection

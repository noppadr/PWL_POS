@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <h1>Welcome to POS System</h1>
        <p>A simple point of sales application for your business.</p>
        <a href="/sales" class="btn btn-primary">Go to Sales</a>
    </div>
@endsection

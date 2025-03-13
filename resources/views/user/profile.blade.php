@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <h2>User Profile</h2>
    <div class="card">
        <div class="card-body">
            <h5>Name: {{ $name ?? 'Guest' }}</h5>
            <p>ID: {{ $id ?? '0' }}</p>
            <p>Role: Cashier</p>
        </div>
    </div>
@endsection



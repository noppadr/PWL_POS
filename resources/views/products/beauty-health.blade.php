@extends('layouts.app')

@section('title', 'Beauty & Health')

@section('content')
    <h2>Beauty & Health Products</h2>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Shampoo</h5>
                    <p>Price: Rp 25.000</p>
                    <button class="btn btn-sm btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Vitamin C</h5>
                    <p>Price: Rp 50.000</p>
                    <button class="btn btn-sm btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
@endsection


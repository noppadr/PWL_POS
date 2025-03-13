@extends('layouts.app')

@section('title', 'Food & Beverage')

@section('content')
    <h2>Food & Beverage Products</h2>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Coffee</h5>
                    <p>Price: Rp 15.000</p>
                    <button class="btn btn-sm btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Milk</h5>
                    <p>Price: Rp 12.000</p>
                    <button class="btn btn-sm btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
@endsection


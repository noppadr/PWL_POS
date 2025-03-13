@extends('layouts.app')

@section('title', 'Home Care')

@section('content')
    <h2>Home Care Products</h2>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Detergent</h5>
                    <p>Price: Rp 20.000</p>
                    <button class="btn btn-sm btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Dishwashing Liquid</h5>
                    <p>Price: Rp 15.000</p>
                    <button class="btn btn-sm btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
@endsection



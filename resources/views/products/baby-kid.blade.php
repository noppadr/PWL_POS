@extends('layouts.app')

@section('title', 'Baby & Kid')

@section('content')
    <h2>Baby & Kid Products</h2>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Diapers</h5>
                    <p>Price: Rp 110.000</p>
                    <button class="btn btn-sm btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Baby Wipes</h5>
                    <p>Price: Rp 20.000</p>
                    <button class="btn btn-sm btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
@endsection


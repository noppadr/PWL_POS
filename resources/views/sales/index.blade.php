@extends('layouts.app')

@section('title', 'Sales')

@section('content')
    <h2>Point of Sales</h2>
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Coffee</h5>
                                    <p>Rp 15.000</p>
                                    <button class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Milk</h5>
                                    <p>Rp 12.000</p>
                                    <button class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Cart</div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Coffee</td>
                                <td>15.000</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2">Total:</th>
                                <th>30.000</th>
                            </tr>
                        </tfoot>
                    </table>
                    <button class="btn btn-success w-100">Checkout</button>
                </div>
            </div>
        </div>
    </div>
@endsection
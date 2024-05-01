@extends('layouts.app')
@section('title', 'Create product form')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Create Product</div>
        </div>
        <form action="{{ route('createProduct')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="product-name">Name</label>
                    <input type="text" name="name" class="form-control" id="product-name">
                </div>
                <div class="form-group">
                    <label for="product-price">Price</label>
                    <input type="number" name="price" class="form-control" id="product-price">
                </div>
                <div class="form-group">
                    <label for="product-photo">Photo</label>
                    <textarea type="text" name="photo" class="form-control" id="product-photo"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection
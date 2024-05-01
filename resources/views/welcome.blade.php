@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h4 class="text-center mb-2">Product Table</h4>
        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Photo</td>
                <td>Actions</td>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name']}}</td>
                <td>{{ $product['price']}}TND</td>
                <td><img width="60"
                        src="{{ $product['photo']}}"
                        alt=""></td>
                        <td>
                            <button class="btn btn-info">Edit</button>
                            <a href="{{ route('deleteProduct', $product['id']) }}" class="btn btn-danger">Delete</button>
                        </td>
            </tr>
            @endforeach

        </table>
    </div>
@endsection



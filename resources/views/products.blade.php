@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <ul>
            @foreach($products as $product)
            <li>{{ $product->name }}</li>
            @endforeach
        </ul>
    </div>
@stop

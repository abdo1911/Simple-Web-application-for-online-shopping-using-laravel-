@extends('layouts.app')

@section('content')

<h1 style="text-align:center">Products Page</h1>
<br>

@if(session('status'))
    <div class ="bg-success">{{session('status')}}</div>
@endif
<br>

<a class="btn btn-primary" href="{{route('products.create')}}">Create Products</a>
<br>
<br>

@forelse($products as $product)

    <div class="card text-center">
        <div class="card-header">
            Products
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->category->name}}</p>
            <p class="card-text">{{$product->price}} LE</p>
            <a href="{{route('products.details',$product->id)}}" class="btn btn-primary">Details</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
    <br>
    <br>
    <br>

@empty
    <h2>there are no products</h2>

@endforelse

<br>
<div>{{$products->links()}}</div>

@endsection

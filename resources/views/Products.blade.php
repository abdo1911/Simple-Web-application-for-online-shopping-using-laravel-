@extends('layouts.app')

@section('content')

@if(session('status'))
    <div class ="bg-success">{{session('status')}}</div>
@endif

<style>
    body {
        font-family: "Lato", sans-serif;
    }
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 15px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }
    .sidenav a:hover {
        color: #f1f1f1;
    }
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
</style>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{route('products.create')}}">Create Products</a>
    <a href="{{route('comment')}}">Comment</a>
    <a href="{{route('showComment')}}">Review Comments</a>
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>

<div class="content">
    <span style="font-size:30px;color: #00bf8f;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

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
            @if($product->logo)
                <img style="width:30vw" src="{{asset("$product->logo")}}"/>
            @else
                <h4 style="font-weight: bold"> There is  No image Uploaded </h4>
            @endif
            <br>
            <br>
            <a href="{{route('products.details',$product->id)}}" class="btn btn-primary">Details</a>
        </div>
        <div class="card-footer text-muted">
            {{$product->created_at}}
        </div>
    </div>
    <br>
    <br>
    <br>

@empty
    <h2>There are no products Yet</h2>

@endforelse

<br>
<div>{{$products->links()}}</div>
<style>
    .w-5{
        display: none;
    }
</style>
@endsection

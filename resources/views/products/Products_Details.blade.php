@extends('layouts.app')

@section('content')

    <h1 style="text-align: center">{{$product1->name}} details</h1>

    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$product1->name}}</h5>
                    <p class="card-text">{{$product1->category->name}}</p>
                    <p class="card-text">{{$product1->price}} LE</p>
                    <p class="card-text">{{$product1->description}}</p>
                    <p class="card-text">Call 0{{$product1->mobile}} To Communicate </p>
                </div>
            </div>
        </div>
    </div>

@endsection

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
                    <br>
                    @if($product1->logo)
                        <img style="width:30vw" src="{{asset("$product1->logo")}}"/>
                    @else
                        <h4 style="font-weight: bold"> There is  No image Uploaded </h4>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

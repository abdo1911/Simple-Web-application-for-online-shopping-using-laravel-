@extends('layouts.app')

@section('content')

    <br>
    @if(session('status'))
        <div class ="bg-success">{{session('status')}}</div>
    @endif
    <br>


    <form class="m-5" method="post" enctype="multipart/form-data" action="{{route('products.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">mobile</label>
            <input type="text" name="mobile" class="form-control" id="exampleInputPassword1">
        </div>
        <label for="exampleInputPassword1" class="form-label">Type</label>
        <select name = "category_id" class="form-select" aria-label="Default select example">
            @foreach($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Logo</label>
            <input type='file' name="logo" class="form-control" placeholder="Enter Email...">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Insert</button>


    </form>



@endsection

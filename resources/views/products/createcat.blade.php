@extends('layouts.app')

@section('content')

    <br>
    @if(session('status'))
        <div class ="bg-success">{{session('status')}}</div>
    @endif
    <br>


    <form class="m-5" method="post" enctype="multipart/form-data" action="{{route('cat.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Insert</button>


    </form>



@endsection

@extends('layout')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-3 p-5 m-1">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $product->url }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->status }}</p>
                    <p class="card-text">{{ $product->store_id }}</p>
                    <p class="card-text">{{ $product->description }}</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
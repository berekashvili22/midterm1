@extends('layout')
@section('content')
<div class="container">
    <div>
        <label for="cars">Stores</label>
        <select name="cars" id="cars">
            @foreach ($stores as $store)
                <option><a href="{{ route('filter', $store->id) }}">{{ $store->store_name }}</a></option>
            @endforeach
        </select>
    </div>
    <div class="row">
            @foreach ($products as $product)
            <div class="col-3 p-5 m-1">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $product->url }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->status }}</p>
                    <p class="card-text">{{ $product->store_id }}</p>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="{{ route('show', $product->id) }}" class="btn btn-primary">view</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    {{ \App\Store::where('id', 1)->first()['store_location'] }}
</div>
@endsection
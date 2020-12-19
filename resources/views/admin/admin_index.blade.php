@extends('layout')
@section('content')
<div class="container">
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
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">status</th>
                    <th scope="col">desc</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
</div>
@endsection
@extends('layout.app')
@section('main')

<div class="container">
<div class="text-right">
    <a class="btn btn-primary mt-2" href="/">Back</a>
  </div>
    <div class="row justify-content-center">
    <div class="col-sm-8 mt-4">

        <div class="card p-4">
            <p>Name: <b>{{$product->name}}</b> </p>
            <p>Description: <b>{{$product->description}}</b> </p>
            <img src="/product/{{$product->image}}" class="rounded" width="100%">

        </div>
</div>
    </div>

</div>

@endsection
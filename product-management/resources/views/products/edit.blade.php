@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit product</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Oop!</strong>There were some problems withs yours input
            <ul>
                @foreach($errors->all() as$error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('products.update',$product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class=" row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product name:</strong>
                    <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control" placeholder="product name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product description:</strong>
                    <textarea type="text" name="product_desc" style="height: 150px" class="form-control" placeholder="product description">{{$product->product_desc}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>QTY:</strong>
                    <input type="number" name="product_qty" value="{{$product->product_qty}}" style="height: 150px" class="form-control" placeholder="Quantity">
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class=" btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection


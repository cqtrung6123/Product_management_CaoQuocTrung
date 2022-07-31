@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit Category</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{route('categorys.index')}}">Back</a>
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
    <form action="{{route('categorys.update',$category-> id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class=" row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category name:</strong>
                    <input type="text" name="cat_name" value="{{$category->cat_name}}" class="form-control" placeholder="category name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category description:</strong>
                    <textarea type="text" name="ca_desc" style="height: 150px" class="form-control" placeholder="category description">{{$category->cat_desc}}</textarea>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class=" btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection


@extends('products.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Show category</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('categorys.index') }}"> Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category Name : </strong>
                {{ $category->cat_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category Description : </strong>
                {{ $category->cat_desc }}
            </div>
        </div>
    </div>
@endsection

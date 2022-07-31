@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Category Management</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('categorys.create') }}">
                Add category</a>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($categorys) > 0)
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th width="280px">More</th>
            </tr>
            @foreach ($categorys as $category)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $category->cat_name }}</td>
                    <td>{{ $category->cat_desc }}</td>
                    <td>
                        <form action="{{ route('categorys.destroy',$category->id) }}"
                              method="POST">
                            <a class="btn btn-info"
                               href="{{ route('categorys.show',$category->id) }}">Show</a>
                            <a class="btn btn-primary"
                               href="{{ route('categorys.edit',$category->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif
    {!! $categorys->links() !!}
@endsection

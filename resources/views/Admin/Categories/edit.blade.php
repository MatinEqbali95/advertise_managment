@extends('Admin.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 ">
        <h1 class="h2">ویرایش دسته بندی</h1>
        <a href="{{route('categories.index')}}" class="btn btn-primary">بازگشت</a>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger text-right">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{route('categories.update',['id'=>$category->id])}}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group text-right">
            <label for="exampleInputEmail1" >نام دسته بندی:</label>
            <input  name="name" class="form-control" value="{{$category->name}}">

        </div>
        <button type="submit" class="btn btn-outline-danger " name="submit">ویرایش</button>

    </form>


@endsection




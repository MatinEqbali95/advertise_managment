@extends('Admin.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 ">
        <h1 class="h2">ایجاد زیردسته</h1>
        <a href="{{route('subcategories.show',['parent_id'=> session('id') ])}}" class="btn btn-primary">بازگشت</a>
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


    <form action="{{route('subcategories.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group text-right">
            <label for="exampleInputEmail1" >نام زیردسته:</label>
            <input  name="name" class="form-control" >

        </div>
        <button type="submit" class="btn btn-outline-danger " name="submit">ایجاد</button>

    </form>


@endsection




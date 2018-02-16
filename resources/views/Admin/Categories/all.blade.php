@extends('Admin.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 ">
        <h1 class="h2">دسته بندی ها</h1>
        <a href="{{route('categories.create')}}" class="btn btn-primary">ایجاد دسته بندی</a>
    </div>


    <div class="table-responsive">
        <table class="table table-striped text-right">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام دسته بندی</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php $i=1 ?>
            @foreach($categories as $category)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>
                        <form action="{{route('categories.destroy',['id'=>$category->id])}}" method="post">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <div class="btn-group btn-group-xs">
                                <a href="{{route('categories.edit',['id'=>$category->id])}}" class="btn btn-primary">ویرایش</a>
                                <button class="btn btn-danger" >حذف</button>
                                <a href="" class="btn btn-info">مدیریت زیر دسته ها</a>
                            </div>
                        </form>


                    </td>
                 </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection



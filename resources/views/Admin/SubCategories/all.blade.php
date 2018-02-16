@extends('Admin.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 ">
        <h1 class="h2">زیردسته ها</h1>
        <div class="btn-group btn-group-xs">
            <a href="{{route('subcategories.create')}}" class="btn btn-primary">ایجاد زیردسته</a>
            <a href="{{route('categories.index')}}" class="btn btn-danger">بازگشت</a>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-striped text-right">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام زیردسته</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php $i=1 ?>
            @foreach($subcategories as $subcategory)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$subcategory->name}}</td>
                    <td>{{$subcategory->created_at}}</td>
                    <td>
                        <form action="{{route('subcategories.destroy',['id'=>$subcategory->id])}}" method="post">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <div class="btn-group btn-group-xs">
                                <a href="{{route('subcategories.edit',['id'=>$subcategory->id])}}" class="btn btn-primary">ویرایش</a>
                                <button class="btn btn-danger" >حذف</button>
                            </div>
                        </form>


                    </td>
                 </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <div style="text-align: center">
        {!! $subcategories->render() !!}
    </div>

@endsection



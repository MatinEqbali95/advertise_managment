@extends('User.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 ">
        <h1 class="h2">تبلیغات</h1>
        <a href="{{route('user_propagation.create')}}" class="btn btn-primary">تبلیغ جدید</a>
    </div>


    <div class="table-responsive">
        <table class="table table-striped text-right">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>عنوان تبلیغ</th>
                <th>دسته بندی</th>
                <th>شهر مربوطه</th>
                <th>نام ایجاد کننده</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php $i=1 ?>
            @foreach($propagation as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->category}}</td>
                    <td>{{$item->city}}</td>
                    <td>{{$item->user->username}}</td>
                    <td>
                        <form action="{{route('user_propagation.destroy',['id'=>$item->id])}}" method="post">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <div class="btn-group btn-group-xs">
                                <a href="{{route('user_propagation.edit',['id'=>$item->id])}}" class="btn btn-primary">ویرایش</a>
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
        {!! $propagation->render() !!}
    </div>



@endsection



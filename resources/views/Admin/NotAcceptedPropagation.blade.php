@extends('Admin.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 ">
        <h1 class="h2">تبلیغات تایید نشده</h1>
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
                        <div class="btn-group btn-group-xs">
                            <form method="post" action="{{route('accept',['id'=>$item->id])}}" >
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                               <input type="submit" name="accept" id="accept" value="تایید" class="btn btn-primary">
                            </form>
                            <form method="post" action="{{route('propagation.destroy',['id'=>$item->id])}}">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <input type="submit" name="del" id="del" value="حذف" class="btn btn-danger">
                            </form>
                        </div>

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



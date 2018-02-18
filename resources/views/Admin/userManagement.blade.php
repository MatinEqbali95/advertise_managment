@extends('Admin.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 ">
        <h1 class="h2">کاربران وب سایت</h1>
    </div>


    <div class="table-responsive">
        <table class="table table-striped text-right">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>ایمیل</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php $i=1 ?>
            @foreach($users as $user)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$user->fname}}</td>
                    <td>{{$user->lname}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <div class="btn-group btn-group-xs">
                            <form method="post" action="{{route('user.destroy',['id'=>$user->id])}}">
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
        {!! $users->render() !!}
    </div>



@endsection



@extends('User.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 ">
        <h1 class="h2">ویرایش تبلیغ</h1>
        <a href="{{route('user_propagation.index')}}" class="btn btn-primary">بازگشت</a>
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


    <form action="{{route('user_propagation.update',['id'=>$propagation->id])}}" method="post" class="text-right" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <label for="title">عنوان تبلیغ:</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$propagation->title}}">
        </div>
        <div class="form-group">
            <label for="description">توضیحات:</label>
            <textarea id="description" name="description" class="form-control">{{$propagation->description}}</textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">ایمیل:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="ایمیل" value="{{$propagation->email}}">
            </div>
            <div class="form-group col-md-6">
                <label for="tel">تلفن:</label>
                <input type="text" name="tel" class="form-control" id="tel" placeholder="پسورد" value="{{$propagation->tel}}">
            </div>
        </div>
        <div class="form-group">
            <label for="image">انتخاب تصویر:</label>
            <div class="custom-file ">
                <input type="file"  name="image" id="image" >
                <a href="{{$propagation->image}}" target="_blank"><img src="{{$propagation->image}}" ></a>

                {{--<input type="file" class="custom-file-input" id="validatedCustomFile" >--}}
                {{--<label class="custom-file-label" for="validatedCustomFile">انتخاب عکس برای تبلیغ</label>--}}
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">نام شهر:</label>
                <select id="city" name="city" class="form-control">
                    <option value="آذربایجان شرقی" {{$propagation->city=='آذربایجان شرقی' ? 'selected' : ''}}>آذربایجان شرقی</option>
                    <option value="آذربایجان غربی" {{$propagation->city=='آذربایجان غربی' ? 'selected' : ''}}>آذربایجان غربی</option>
                    <option value="اردبیل" {{$propagation->city=='اردبیل' ? 'selected' : ''}}>اردبیل</option>
                    <option value="اصفهان" {{$propagation->city=='اصفهان' ? 'selected' : ''}}>اصفهان</option>
                    <option value="البرز" {{$propagation->city=='البرز' ? 'selected' : ''}}>البرز</option>
                    <option value="ایلام" {{$propagation->city=='ایلام' ? 'selected' : ''}}>ایلام</option>
                    <option value="بوشهر" {{$propagation->city=='بوشهر' ? 'selected' : ''}}>بوشهر</option>
                    <option value="تهران" {{$propagation->city=='تهران' ? 'selected' : ''}}>تهران</option>
                    <option value="چهارمحال بختیاری" {{$propagation->city=='چهارمحال بختیاری' ? 'selected' : ''}}>چهارمحال بختیاری</option>
                    <option value="خراسان جنوبی" {{$propagation->city=='خراسان جنوبی' ? 'selected' : ''}}>خراسان جنوبی</option>
                    <option value="خراسان رضوی" {{$propagation->city=='خراسان رضوی' ? 'selected' : ''}}>خراسان رضوی</option>
                    <option value="خراسان شمالی" {{$propagation->city=='خراسان شمالی' ? 'selected' : ''}}>خراسان شمالی</option>
                    <option value="خوزستان" {{$propagation->city=='خوزستان' ? 'selected' : ''}}>خوزستان</option>
                    <option value="زنجان" {{$propagation->city=='زنجان' ? 'selected' : ''}}>زنجان</option>
                    <option value="سمنان" {{$propagation->city=='سمنان' ? 'selected' : ''}}>سمنان</option>
                    <option value="سیستان وبلوچستان" {{$propagation->city=='سیستان وبلوچستان' ? 'selected' : ''}}>سیستان وبلوچستان</option>
                    <option value="فارس" {{$propagation->city=='فارس' ? 'selected' : ''}}>فارس</option>
                    <option value="قزوین" {{$propagation->city=='قزوین' ? 'selected' : ''}}>قزوین</option>
                    <option value="قم" {{$propagation->city=='قم' ? 'selected' : ''}}>قم</option>
                    <option value="کردستان" {{$propagation->city=='کردستان' ? 'selected' : ''}}>کردستان</option>
                    <option value="کرمان" {{$propagation->city=='کرمان' ? 'selected' : ''}}>کرمان</option>
                    <option value="کرمانشاه" {{$propagation->city=='کرمانشاه' ? 'selected' : ''}}>کرمانشاه</option>
                    <option value="کهکیلویه و بویر احمد" {{$propagation->city=='کهکیلویه و بویر احمد' ? 'selected' : ''}}>کهکیلویه و بویر احمد</option>
                    <option value="گلستان" {{$propagation->city=='گلستان' ? 'selected' : ''}}>گلستان</option>
                    <option value="گیلان" {{$propagation->city=='گیلان' ? 'selected' : ''}}>گیلان</option>
                    <option value="لرستان" {{$propagation->city=='لرستان' ? 'selected' : ''}}>لرستان</option>
                    <option value="مازندران" {{$propagation->city=='مازندران' ? 'selected' : ''}}>مازندران</option>
                    <option value="مرکزی" {{$propagation->city=='مرکزی' ? 'selected' : ''}}>مرکزی</option>
                    <option value="هرمزگان" {{$propagation->city=='هرمزگان' ? 'selected' : ''}}>هرمزگان</option>
                    <option value="یزد" {{$propagation->city=='یزد' ? 'selected' : ''}}>یزد</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="category">انتخاب دسته بندی:</label>
                <select name="category" id="category" class="form-control">
                    @foreach(\App\Category::whereChild('0')->get() as $item)
                        <optgroup label="{{$item->name}}">

                            <?php
                            $childs="";
                            $childs=\App\Category::where('child','<>','0')->whereChild($item->id)->get();
                            ?>
                            @if($childs->isEmpty())
                                <option value="{{$item->name}}" {{$propagation->category==$item->name ? 'selected' : ''}}>{{$item->name}}</option>
                            @else
                                @foreach(\App\Category::where('child','<>','0')->whereChild($item->id)->get() as $value)
                                    <option value="{{$value->name}}" {{$propagation->category==$value->name ? 'selected' : ''}}>{{$value->name}}</option>
                                @endforeach
                            @endif
                        </optgroup>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group text-left">
            <button type="submit" class="btn btn-outline-danger">ویرایش</button>
        </div>

    </form>


@endsection




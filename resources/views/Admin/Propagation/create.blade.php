@extends('Admin.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 ">
        <h1 class="h2">تبلیغ جدید</h1>
        <a href="{{route('propagation.index')}}" class="btn btn-primary">بازگشت</a>
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


    <form action="{{route('propagation.store')}}" method="post" class="text-right" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">عنوان تبلیغ:</label>
                <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="description">توضیحات:</label>
                <textarea id="description" name="description" class="form-control">{{old('description')}}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">ایمیل:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="ایمیل" value="{{auth()->user()->email}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="tel">تلفن:</label>
                    <input type="text" name="tel" class="form-control" id="tel" placeholder="پسورد" value="{{auth()->user()->tel}}">
                </div>
            </div>
            <div class="form-group">
                <label for="image">انتخاب تصویر:</label>
                <div class="custom-file ">
                    <input type="file"  name="image" id="image" >

                    {{--<input type="file" class="custom-file-input" id="validatedCustomFile" >--}}
                    {{--<label class="custom-file-label" for="validatedCustomFile">انتخاب عکس برای تبلیغ</label>--}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">نام شهر:</label>
                    <select id="city" name="city" class="form-control">
                        <option value="آذربایجان شرقی" >آذربایجان شرقی</option>
                        <option value="آذربایجان غربی">آذربایجان غربی</option>
                        <option value="اردبیل">اردبیل</option>
                        <option value="اصفهان">اصفهان</option>
                        <option value="البرز">البرز</option>
                        <option value="ایلام">ایلام</option>
                        <option value="بوشهر">بوشهر</option>
                        <option value="تهران">تهران</option>
                        <option value="چهارمحال بختیاری">چهارمحال بختیاری</option>
                        <option value="خراسان جنوبی">خراسان جنوبی</option>
                        <option value="خراسان رضوی">خراسان رضوی</option>
                        <option value="خراسان شمالی">خراسان شمالی</option>
                        <option value="خوزستان">خوزستان</option>
                        <option value="زنجان">زنجان</option>
                        <option value="سمنان">سمنان</option>
                        <option value="سیستان وبلوچستان">سیستان وبلوچستان</option>
                        <option value="فارس">فارس</option>
                        <option value="قزوین">قزوین</option>
                        <option value="قم">قم</option>
                        <option value="کردستان">کردستان</option>
                        <option value="کرمان">کرمان</option>
                        <option value="کرمانشاه">کرمانشاه</option>
                        <option value="کهکیلویه و بویر احمد">کهکیلویه و بویر احمد</option>
                        <option value="گلستان">گلستان</option>
                        <option value="گیلان">گیلان</option>
                        <option value="لرستان">لرستان</option>
                        <option value="مازندران">مازندران</option>
                        <option value="مرکزی">مرکزی</option>
                        <option value="هرمزگان">هرمزگان</option>
                        <option value="همدان">همدان</option>
                        <option value="یزد">یزد</option>
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
                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                @else
                                        @foreach(\App\Category::where('child','<>','0')->whereChild($item->id)->get() as $value)
                                            <option value="{{$value->name}}">{{$value->name}}</option>
                                        @endforeach
                                @endif
                            </optgroup>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group text-left">
                <button type="submit" class="btn btn-outline-danger">درج</button>
            </div>

    </form>


@endsection




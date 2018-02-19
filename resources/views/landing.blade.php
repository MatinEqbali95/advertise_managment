
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت تبلیغات</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fontiran.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

<!-- start header -->

<div class="header black" >
    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <nav id="nav" class="menu text-center" >
            <ul>
                <li class="inline-block float-right order-1">
                    <ul>
                        <li class="inline-block "><img src="images/logo.png" width="60px" height="60px"></li>
                        <li class="inline-block"><h1>مدیریت تبلیغات</h1></li>
                    </ul>
                </li>
                <li class="inline-block float-left mt-2 order-0">
                    @if(auth()->check())
                        @if(auth()->user()->level=='admin')
                            <form action="{{route('admin.panel')}}">
                                <input type="submit" class="mainButton mainButtonColorful login" href="" value="حساب کاربری">
                            </form>
                        @else
                            <form action="{{route('user.panel')}}">
                                <input type="submit" class="mainButton mainButtonColorful login" href="" value="حساب کاربری">
                            </form>
                        @endif

                        @else
                        <form action="{{route('login')}}">
                            <input type="submit" class="mainButton mainButtonColorful login" href="" value="ورود | ثبت نام">
                        </form>
                    @endif


                </li>
            </ul>
        </nav>
        <div class="text-center contentHeader order-2">
            <h3>"شما می توانید از طریق عضویت در سایت تبلیغات خود را ثبت کنید"</h3>
        </div>

    </div>
</div>

<!-- end header -->
<div class="services">
    <div class="container text-center">

        <div class="heading">
            <h3 class="part-heading">تبلیغ مورد نظر،را جستجو کنید:</h3>
        </div>

            <form action="{{route('search')}}" method="post" class="text-center contentHeader form-row ">
                {{csrf_field()}}
                <div class="form-group col-sm-3">
                    <input type="text" name="search_word" id="search_word" class="form-control" value="{{old('search_word')}}" placeholder="کلمه ای برای جستجو در عنوان یا توضیحات تبلیغ...">
                </div>

                <div class="form-group col-sm-3">
                    <select id="city" name="city" class="form-control">
                        <option value="0" selected>همه استان ها</option>
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

                <div class="form-group col-sm-3">
                    <select name="category" id="category" class="form-control">
                        <option value="0" selected>همه ی دسته بندی ها</option>
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
                <input type="submit" id="submit" name="submit" value="جستجو" class="mainButton mainButtonColorful col-sm-1">
            </form>

    </div>
</div>






<div class="services">
    <div class="container text-center">

        <div class="heading">
            <h3 class="part-heading">تبلیغات</h3>
        </div>

        <div class="col-md-12">
            <div class="row">
                @foreach($propagation as $item)
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{{$item->image}}" alt="">
                            <div class="caption">
                                <h4><a href="{{route('show',['id'=>$item->id])}}">{{ $item->title }}</a>
                                </h4>
                                <p>{{ str_limit($item->description , 120) }}</p>
                            </div>
                            {{--<div class="ratings">--}}
                                {{--<p class="pull-right">{{ $article->viewCount }} بازدید</p>--}}
                                {{--<p class="pull-right">4 بازدید</p>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>



<!-- start footer -->
<div id="footer" class="footer">
    <div class="container">
        <div class="float-right col-md-6 text-right " style="margin-top: 50px">
            <h4 style="color: white">درباره ما</h4>
            <p style="color: white" class="pt-2">"شما می توانید از طریق عضویت در سایت تبلیغات خود را ثبت کنید"
                "شما می توانید از طریق عضویت در سایت تبلیغات خود را ثبت کنید""شما می توانید از طریق عضویت در سایت تبلیغات خود را ثبت کنید""شما می توانید از طریق عضویت در سایت تبلیغات خود را ثبت کنید"
            </p>
        </div>
        <div class="float-left col-md-6 text-right " style="margin-top: 50px">
            <h4 style="color: white">تماس با ما</h4>
            <p style="color: white " class="pt-2">"شما می توانید از طریق عضویت در سایت تبلیغات خود را ثبت کنید"
                "شما می توانید از طریق عضویت در سایت تبلیغات خود را ثبت کنید"
                "شما می توانید از طریق عضویت در سایت تبلیغات خود را ثبت کنید"
            </p>


        </div>



    </div>
</div>
<!-- end footer -->



</body>
</html>
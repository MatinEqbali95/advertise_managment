<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>مدیریت تبلیغات</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/show.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/fontiran.css">


</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">مدیریت تبلیغات</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">

                @if(auth()->check())
                    @if(auth()->user()->level=='admin')
                            <li>
                                <a href="{{route('admin.panel')}}">حساب کاربری</a>
                            </li>
                    @else
                        <li>
                            <a href="{{route('user.panel')}}">حساب کاربری</a>
                        </li>

                    @endif

                @else
                    <li>
                        <a href="{{route('login')}}">ورود | ثبت نام</a>
                    </li>

                @endif

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div id="app" class="container">

    <div class="row">
        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            <!-- Blog Post -->

            <!-- Title -->
            <h1>{{$propagation->title}}</h1>

            <!-- Author -->
            <p class="lead">
                <a href="#">
                    ایجاد شده توسط {{$propagation->user->username}}
                </a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span>{{$propagation->created_at}}</p>

            <hr>
            <!-- Preview Image -->
            <img class="img-responsive" src="{{$propagation->image}}" alt="">

            <hr>
            <h4 class="inline-block">شهر مربوطه: {{$propagation->city}}</h4>
            <hr>
            <h4 class="inline-block">دسته بندی تبلیغ: {{$propagation->category}}</h4>

            <hr>

            <!-- Post Content -->
            <p dir="rtl">{{$propagation->description}}</p>

            <hr>



        </div>

    </div>

</div>



<!-- start footer -->
<div id="footer" class="footer">
    <div class="container">
        <div class="float-right col-md-6 text-right " style="margin-top: 50px">
            <h4 style="color: white">درباره ما</h4>
            <p style="color: white " class="pt-2">"{{Storage::get('info_site/about')}}"
            </p>
        </div>
        <div class="float-left col-md-6 text-right " style="margin-top: 50px">
            <h4 style="color: white">تماس با ما</h4>
            <p style="color: white " class="pt-2">"{{Storage::get('info_site/call')}}"
            </p>


        </div>



    </div>
</div>
<!-- end footer -->



<script src="/js/app.js"></script>

</body>

</html>

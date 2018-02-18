@extends('User.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default text-right">
                    <div class="card-header">اطلاعات کاربری</div>

                    <div class="card-body ">
                        <form method="POST" action="{{ route('updateUserInfo') }}">
                            @csrf

                            <div class="form-group row ">
                                <label for="fname" class="col-md-2 col-form-label text-md-right ">نام</label>

                                <div class="col-md-10 ">
                                    <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname"
                                           value="{{ auth()->user()->fname }}" autofocus>

                                    @if ($errors->has('fname'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                    @endif
                                </div>


                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-md-2 col-form-label text-md-right ">نام خانوادگی</label>

                                <div class="col-md-10 ">
                                    <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname"
                                           value="{{ auth()->user()->lname }}"  autofocus>

                                    @if ($errors->has('lname'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label text-md-right ">ایمیل</label>

                                <div class="col-md-10 ">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                           value="{{ auth()->user()->email }}" >

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tel" class="col-md-2 col-form-label text-md-right ">تلفن</label>

                                <div class="col-md-10 order-0">
                                    <input id="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel"
                                           value="{{ auth()->user()->tel }}"  autofocus>

                                    @if ($errors->has('tel'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-2 col-form-label text-md-right ">شهر</label>

                                <div class="col-md-10 order-0">
                                    <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city"
                                           value="{{ auth()->user()->city }}"  autofocus>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-2 col-form-label text-md-right ">نام کاربری</label>

                                <div class="col-md-10 ">
                                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"
                                           value="{{ auth()->user()->username }}"  autofocus>

                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-2 col-form-label text-md-right ">پسورد</label>

                                <div class="col-md-10 ">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-2 col-form-label text-md-right ">تکرار پسورد</label>

                                <div class="col-md-10 ">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group row mb-0 ">
                                <div class="col-md-10 ">
                                    <button type="submit" class="btn btn-primary float-left">
                                        تغییر
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

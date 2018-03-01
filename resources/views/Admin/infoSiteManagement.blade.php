@extends('Admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default text-right">
                    <div class="card-header">اطلاعات سایت</div>

                    <div class="card-body ">
                        <form method="POST" action="{{ route('updateInfoSite') }}">
                            @csrf

                            <div class="form-group row ">
                                <label for="about" class="col-md-2 col-form-label text-md-right ">درباره ما</label>

                                <div class="col-md-10 ">
                                    <textarea id="about" type="text" class="form-control{{ $errors->has('about') ? ' is-invalid' : '' }}" name="about" autofocus rows="3">
                                        {{Storage::get('info_site/about')}}
                                    </textarea>

                                    @if ($errors->has('about'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label for="call" class="col-md-2 col-form-label text-md-right ">تماس با ما</label>

                                <div class="col-md-10 ">
                                    <textarea id="call" type="text" class="form-control{{ $errors->has('call') ? ' is-invalid' : '' }}" name="call" autofocus rows="3">
                                        {{Storage::get('info_site/call')}}
                                    </textarea>

                                    @if ($errors->has('call'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('call') }}</strong>
                                    </span>
                                    @endif
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

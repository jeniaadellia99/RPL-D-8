@extends('layouts.app')

@section('content')
<div class="container" align="center">
    <div style="align-items: center" class="col-sm-4">
            <div class="row">
                    <div class="col-md-6" style="background-color:#22A7F0; height:  ">&nbsp;</div>
                    <div class="col-md-6" style="background-color:#3498DB ">&nbsp;</div>
            </div>
            <div class="row">
            
                 <div class="col-md-12" style="background: white; text-align: left">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            
                            <div class="col-md-12">
                                <div class="input-group" style="margin-top: 10%">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" data-feather="home"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></span>
                                    </div>
                                    <input placeholder="Username" aria-describedby="basic-addon1" id="user" type="email" class="form-control{{ $errors->has('user') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                @if ($errors->has('user'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" data-feather="home"> </span>
                                    </div>
                                    <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                </div>
                                

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <span style="padding-left: 15%">{!! captcha_img() !!}</span>
                                </div>
                                
                                <div class="col-md-7">
                                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" style="width: 90%">
                                
                                </div>
                            </div>
                            </div>
                            <br>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width: 100%">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>

@endsection

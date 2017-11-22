@extends('main')
@section('title','Đăng kí')
@section('content')
<div class="container">
    	<div class="login">
                  <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                      <div class="col-md-6 login-do">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <div class="login-mail">
                                <input id="name" type="text" name="name"  placeholder="Tên của bạn" value="{{ old('name') }}" required autofocus>
                                <i class="glyphicon glyphicon-user"></i>
                        </div>
                      </div>
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <div class="login-mail">
                                <input id="phone" type="text" placeholder="Số điện thoại" name="phone" value="{{ old('phone') }}" required autofocus>
                                <i  class="glyphicon glyphicon-phone"></i>
                            </div>
                        </div>
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="login-mail">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                <i  class="glyphicon glyphicon-envelope"></i>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="login-mail">
                                <input id="password" type="password" placeholder="Mật khẩu" name="password" required>
                                <i class="glyphicon glyphicon-lock"></i>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary hvr-skew-backward">
                                    Đăng kí
                                </button>
                            </div>
                        </div>
                      </div>
                      <div class="clearfix"> </div>
                    </form>
          </div>
</div>

@endsection

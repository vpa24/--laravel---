@extends('main')
@section('title','Đăng nhập')

@section('content')
  <div class="container">
  		<div class="login">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        	<div class="col-md-6 login-do">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="login-mail">
                                <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                <i  class="glyphicon glyphicon-envelope"></i>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="login-mail">
                                <input id="password" type="password" placeholder="Mật khẩu" name="password" required>
                                <i class="glyphicon glyphicon-lock"></i>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Nhớ mật khẩu
                                    </label>
                                </div>
                            </div>
                        </div>

                          <button type="submit"  class="btn hvr-skew-backward">
                                    Đăng nhập
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                  Quên mật khẩu
                                </a>
                      </div>
                    </form>
                </div>
            </div>
  @endsection

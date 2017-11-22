@extends('main')
@section('title','Đặt Hàng')

@section('content')
  @if (Auth::guest())
    <script type="text/javascript">window.location="{{url('/login')}}"</script>
  @else

        	<div class="login">
                      <form method="POST" action="{{ route('thuc_hien_dat_hang') }}">
                            {{ csrf_field() }}
                          <div class="col-md-6 login-do">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <div class="login-mail">
                                    <input id="name" type="text" name="name"  placeholder="Tên của bạn" value="{{$khach_hang->name }}" required autofocus>
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
                                    <input id="phone" type="text" placeholder="Số điện thoại" name="phone" value="{{$khach_hang->phone}}" required autofocus>
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
                                    <input id="email" type="email" name="email" value="{{$khach_hang->email }}" placeholder="Email" required>
                                    <i  class="glyphicon glyphicon-envelope"></i>
                                </div>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <div >Thanh toán bằng:
                              {{ Form::radio('thanh_toan', 'tiền mặt') }}Tiền Mặt
                              {{ Form::radio('thanh_toan', 'thẻ') }}Thẻ
                            </div>
                            <button type="submit"  class="btn hvr-skew-backward">
                                      Giao đến địa chỉ này
                                  </button>
                          </div>
                          <div class="clearfix"> </div>
                        </form>
              </div>
  @endif

  @endsection

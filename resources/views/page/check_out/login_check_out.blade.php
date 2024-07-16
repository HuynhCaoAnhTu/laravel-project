@extends('welcome')
@section('content')
<div class="row">
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Đăng nhập</h2>
            <form action="{{ URL::to('check_login_in_checkout') }}" method="POST">
                {{ csrf_field() }}
                <input type="email" name="user_email" placeholder="Email" />
                <input type="password" name="user_password" placeholder="Mật khẩu" />
                <span>
                    <input type="checkbox" class="checkbox"> 
                    Duy trì đăng nhập
                </span>
                <button type="submit" class="btn btn-default">Đăng nhập</button>
            </form>
        </div><!--/login form-->
    </div>
    <div class="col-sm-1">
        <h2 class="or">OR</h2>
    </div>
    <div class="col-sm-4">
        <div class="signup-form"><!--sign up form-->
            <h2>Đăng kí</h2>
            <form action="{{ URL::to('/register') }}" method="POST">
                {{ csrf_field() }}
                <input type="text"  name="name_cus" placeholder="Họ và tên"/>
                <input type="email"  name="email_cus"  placeholder="Email"/>
                <input type="password"  name="pass_cus" placeholder="Mật khẩu"/>
                <input type="text" name="phone_cus"  placeholder="Số điện thoại"/>
                <button type="submit"class="btn btn-default">Đăng kí</button>
            </form>
        </div><!--/sign up form-->
    </div>
</div>

@stop
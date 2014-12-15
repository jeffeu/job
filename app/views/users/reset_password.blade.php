@extends('layout')

@section("title")
    {{ Lang::get("user.login") }}
@stop

@section("body")
<div class="col-lg-offset-7 col-lg-5">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-user"></i> {{ Lang::get("user.user_login") }}</h4>
        </div>
        <form method="POST" class="form-horizontal" action="{{{ URL::to('/users/reset_password') }}}" accept-charset="UTF-8">
             <div class="innerLR">
                <div class="panel-body">
                    <input type="hidden" name="token" value="{{{ $token }}}">
                    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

                    <div class="form-group">
                        <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                        <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
                        <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
                    </div>

                    @if (Session::get('error'))
                        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                    @endif

                    @if (Session::get('notice'))
                        <div class="alert">{{{ Session::get('notice') }}}</div>
                    @endif

                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop

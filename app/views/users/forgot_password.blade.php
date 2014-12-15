@extends('layout')

@section("title")
    {{ Lang::get("user.forgot_password") }}
@stop

@section("body")
<div class="col-lg-offset-7 col-lg-5">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><i class="fa fa-user"></i> {{ Lang::get("user.forgot_password") }}</h4>
        </div>
        <form method="POST" class="form-horizontal" action="{{ URL::to('/users/forgot_password') }}" accept-charset="UTF-8">
             <div class="innerLR">
                <div class="panel-body">
                    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

                    <div class="form-group">
                        <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
                        <div class="input-append input-group">
                            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                            <span class="input-group-btn">
                                <input class="btn btn-success" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
                            </span>
                        </div>
                    </div>

                    @if (Session::get('error'))
                        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                    @endif

                    @if (Session::get('notice'))
                        <div class="alert">{{{ Session::get('notice') }}}</div>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@stop

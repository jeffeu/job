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
        <form role="form" method="POST" class="form-horizontal" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
            <div class="innerLR">
                <div class="panel-body">
                    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                    <fieldset>
                        <div class="form-group">
                            <label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
                            <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                        </div>
                        <div class="form-group">
                        <label for="password">
                            {{{ Lang::get('confide::confide.password') }}}
                        </label>
                        <input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                        <p class="help-block">
                            <a href="{{{ URL::to('/users/forgot_password') }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
                        </p>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label for="remember" class="checkbox-custom">
                                    <input type="hidden" name="remember" value="0">
                                    <input tabindex="4" type="checkbox" name="remember"  id="remember" value="1">
                                    <i class="fa fa-fw fa-square-o checked"></i> {{{ Lang::get('confide::confide.login.remember') }}}
                                </label>
                             </div>
                        </div>
                        <div class="form-group">
                            <button tabindex="3" type="submit" class="btn btn-success">{{{ Lang::get('confide::confide.login.submit') }}}</button>
                            {{ HTML::linkRoute('users.create', Lang::get('users.create'), [], ['class' => "btn btn-info pull-right"]) }}
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
<div>
@stop
@section('js')
    <script src="/theme/components/forms_elements_fuelux-checkbox/fuelux-checkbox.init.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
@stop

<!DOCTYPE html>
<html>
    <head>
        <title>
        @yield('title')
        </title>
        {{ HTML::style('theme/css/skins/module.admin.stylesheet-complete.skin.green.min.css') }}
        {{ HTML::style('css/layout.css') }}
        @yield('css')
    </head>
    <body>
        <div class="navbar hidden-print main navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a id="logo" class="animated fadeInDown pull-left logo">RHdoTI</a>
                </div>
                <ul class="nav navbar-nav navbar-right right-side">
                    <li>
                       <div>{{ HTML::linkRoute('users.login', Lang::get('users.login'), [], ['class' => 'btn btn-primary']) }}
                    </li>
                </ul>
            </div>
        </div>
        <DIV class="layout-app">
            <div class="container">
                @yield('body')
            </div>
        </DIV>
    </body>
    {{ HTML::script('theme/library/jquery/jquery.min.js')}}
    @yield('js')
</html>
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Liverpudlians">
    <meta name="author" content="">
    <title>Login Admin - Family tree</title>
    <base href="{{asset('')}}">

    <!-- Css-->
    <link rel="stylesheet" href="{{ asset('admin_asset/css_admin/login.css') }}">


    <link rel="apple-touch-icon" sizes="57x57" href="admin_asset/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="admin_asset/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="admin_asset/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="admin_asset/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="admin_asset/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="admin_asset/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="admin_asset/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="admin_asset/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="admin_asset/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="admin_asset/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="admin_asset/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="admin_asset/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="admin_asset/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="admin_asset/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="admin_asset/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="javascript:void(0)">
        <h3>Family tree</h3>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ route('post_admin_login') }}" method="post">
        {{ csrf_field()}}
        {{--{{ $hashed = Hash::make('admin!@#') }}--}}
        <div class="form-title">
            <span class="form-title">Welcome.</span>
            <span class="form-subtitle">Please login.</span>
        </div>
        {{--<div class="alert alert-danger display-hide">--}}
            {{--<button class="close" data-close="alert"></button>--}}
            {{--<span> Enter any username and password. </span>--}}
        {{--</div>--}}
        {{--@if ($errors->has('username'))--}}
            {{--<span class="help-block">--}}
                {{--<strong class="text-danger">{{ $errors->first('username') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}

        {{--@if (count($errors) >0)--}}
            {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                    {{--<li class="text-danger"> {{ $error }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--@endif--}}
        @if ($errors->any())
            <div class="show-errors-alert alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{--@if (session('status'))--}}
            {{--<ul class="help-block">--}}
                {{--<li class="text-danger"> {{ session('status') }}</li>--}}
            {{--</ul>--}}
        {{--@endif--}}

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            {{--<label class="control-label visible-ie8 visible-ie9">Username</label>--}}
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" />
        </div>
        {{--@if($errors->has('password'))--}}
            {{--<span class="help-block">--}}
                {{--<strong class="text-danger">{{ $errors->first('password') }}</strong>--}}
            {{--</span>--}}
        {{--@endif--}}
        <div class="form-group">
            {{--<label class="control-label visible-ie8 visible-ie9">Password</label>--}}
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
        </div>
        <div class="form-actions">
            <button type="submit" class="btn red btn-block uppercase">Login</button>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<div class="copyright hide"> 2022 © Admin Dashboard Template. </div>

</body>

</html>

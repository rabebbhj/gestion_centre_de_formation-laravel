<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Crush it Able The most popular Admin Dashboard template and ui kit">
<meta name="author" content="PuffinTheme the theme designer">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Crush it :: Login</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Core css -->
<link rel="stylesheet" href="../../assets/css/main.css"/>
<link rel="stylesheet" href="../../assets/css/theme4.css" id="stylesheet"/>

</head>
<body class="font-opensans">

<div class="auth">
    <div class="card">
        <div class="text-center mb-5">
            <a class="header-brand" href="index.html"><i class="fe fe-command brand-logo"></i></a>
        </div>
        <div class="card-body">
            <div class="card-title">Login to your account</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group style2">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
                </div>
                <div class="form-group style2">
                    <label class="form-label">Password<a href="{{ route('password.request') }}" class="float-right small">I forgot password</a></label>
                    <input type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block" title="">Sign in</button>
                </div>
            </form>
        </div>
        <div class="text-center text-muted">
            Don't have an account yet? <a href="{{ route('register') }}">Sign up</a>
        </div>
        <div class="card-footer text-center mt-3">
            <button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
            <button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
            <button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
            <button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
            <button type="button" class="btn btn-icon btn-vimeo"><i class="fa fa-vimeo"></i></button>
        </div>
    </div>
</div>

<!-- jQuery and bootstrtap js -->
<script src="../../assets/bundles/lib.vendor.bundle.js"></script>

<!-- start plugin js file  -->
<!-- Start core js and page js -->
<script src="../../assets/js/core.js"></script>
</body>
</html>

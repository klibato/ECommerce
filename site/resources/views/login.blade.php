<html>

<head>
    <link rel="stylesheet" href="css/style_login.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container">
        @include ('header')
        <div class="boxlogin">
            <!--formulaire-->
            <form class="fomulairelogin" action="/login" method="post">
                @csrf
                <h1> Login </h1>
                <div class="input-icons">
                    <i class="fas fa-envelope">
                    </i>
                    <input class="email" type="email" placeholder="Email" name="email">
                </div>
                <div class="input-icons">
                    <i class="fas fa-lock">
                    </i>
                    <input class="password" type="password" placeholder="Password" name="password">
                </div>
                @if ($errors->has('email')) <p style="margin-top: -10px">{{ $errors->first('email') }}</p> @endif
                <a style="color:black;font-weight: bold	;font-family: Andale Mono, monospace;text-decoration:none"
                    href="reset"> Forgot Password </a>
                <input class="button_login" type="submit" value="Login">
                <a style="color:black;font-weight: bold ;font-family: Andale Mono, monospace;text-decoration:none;"
                    href="register">Or Sign Up </a>

            </form>
            <!--fin formualire-->

        </div>

        <!--footer-->
        @include ('footer')
        <!--fin footer-->
    </div>
</body>

</html>

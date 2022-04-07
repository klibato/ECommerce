<html lang="en">

<head>
    <link rel="stylesheet" href="css/style_login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <div class="container">
        <!--header-->
        @include ('header')
        <!--fin header-->
        <div class="boxlogin">
            <!--formulaire-->
            <form class="fomulairelogin" action="login.html" method="post">

                <h1> Login </h1>
                <input type="email" name="Email" placeholder="Email" /> </br>
                <input type="password" name="password" placeholder="Password" />
                <br>
                <a style="color:black;font-weight: bold	;font-family: Andale Mono, monospace;text-decoration:none"
                    href="reset.html"> Forgot Password </a>
                <input class="button_login" type="submit" value="Login">
                <a style="color:black;font-weight: bold ;font-family: Andale Mono, monospace;text-decoration:none;"
                    href="register.html"> Or Sign Up </a>
                <br>

            </form>
            <!--fin formualire-->

        </div>
        <!--footer-->
        @include ('footer')
        <!--fin footer-->
    </div>

</body>

</html>

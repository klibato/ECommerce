<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style_register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <!--header-->
        @include ('header')
        <!--fin header-->
        
        <!--Formulaiee-->
        <div class="boxregister">
            <div class="formulaireregister">
                <h4 class="register">
                    REGISTER
                </h4>

                <form action="register" method="post">
                @csrf

                    <div>
                        <label for="name"></label>
                        <input type="text" id="name" name="name" placeholder="Last Name">
                    </div>
                    <br>
                    <div>
                        <label for="mail"></label>
                        <input type="email" id="mail" name="email" placeholder="Email address">
                    </div>
                    <br>
                    <div>
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <br>
                    <div>
                        <label for="confirmpassword"></label>
                        <input type="password" id="confirmpassword" name="password_confirmation"
                            placeholder="Confirm Password">
                    </div>
                    <br>
                    <input class="button_register" type="submit" value="Create new account">
                </form>
            </div>
        </div>
        <!--Fin du formulaire-->
        
        <!--footer-->
        @include ('footer')
        <!--fin footer-->
    </div>
</body>

</html>
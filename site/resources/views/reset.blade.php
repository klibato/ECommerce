<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style_reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Reset password</title>
</head>

<body>
    <div class="container">
        <!--header-->
        @include ('header')
        <!--fin header-->

        <!--Formulaiee-->
        <div class="boxreset">
            <div class="formulairereset">
                <h2 class="reset">RESET PASSWORD</h2>
                <div>
                    <form action="/ma-page-de-traitement" method="post">
                        <label for="mail"></label>
                        <input type="email" id="mail" name="user_mail" placeholder="Email address">
                        <input class="button" type="submit" value="SEND">
                    </form>
                </div>
            </div>
        </div>
        <!--Fin du formulaire-->
        
        <!--footer-->
        @include ('footer')
        <!--fin footer-->
    </div>
</body>

</html>
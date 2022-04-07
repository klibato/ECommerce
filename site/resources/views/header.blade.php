<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <meta charset="UTF-8">
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{asset('storage/pictures/LOGO.png')}}" alt="logo web site" width="125" height="125">
        </div>

        <div class="menu">
            <nav>
                <ul>
                    <a class="contentmenu" href="{{url('login')}}"><i class="fas fa-home"></i></a>
                    <a class="contentmenu" href="{{url('panier')}}"><i class="fas fa-shopping-basket"></i></a>
                    <a class="contentmenu" href="#">About us</a>
                    <a class="contentmenu" href="#">Contact</a>
                </ul>
            </nav>
        </div>
        <div class="utilisateur">

            @if (Auth::check())
                <div class="authname">
                    <p>
                    <p class="connected">{{ Auth()->user()->name }} CONNECTED</p>
                    <a href="/deconnexion" class="button">
                        <i class="fas fa-sign-out-alt"></i></a>

                    </p>
                </div>
            @else
                <p>DISCONNECT</p>
            @endif

        </div>
        
    </header>
</body>

</html>

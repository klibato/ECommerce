<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/style_produit.css') }}">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
        <source src="pictures/smoke.mp4" type="video/mp4">
    </video>
    <div class="container">
        <!--header-->
        @include ('header')
        <!--fin header-->

        <div class="containerpicture2">
            <div class="picture2">
                <a>{{ $product->nameproduct }}</a>
                <div class="imgprd">
                    <img src="{{ asset('storage/pictures/' . $product->picture) }}">
                </div>
            </div>
            <div class="containertext">
                <div class="text">
                    <a> Product material: PVC </br>
                        Product size: full height about 15cm</br>
                        Product weight: about 150g</br>
                        [Note]: Due to the different display and lighting effect, the actual color may be slightly
                        different
                        from the picture color.</br>
                        Category: figurine universe Naruto
                    </a>

                </div>
                <div class="text2">
                    <a>Price : 55$</a>
                </div>

                <div class="text3">
                    <a>There are only 5 left in stock</a>
                </div>
                <form action="{{url('produit')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="id">
                    <a style="text-decoration: none;" href=""><button class="button_catalogue">Add to cart</button></a>
                </form>
            </div>


        </div>

        <!--footer-->
        @include ('footer')
        <!--fin footer-->

    </div>
</body>

</html>

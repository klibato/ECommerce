<html>

<head>
    <link rel="stylesheet" href="css/style_catalogue.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
            <source src="{{ asset('storage/pictures/smoke.mp4') }}" type="video/mp4">
        </video>
        <!--header-->
        @include ('header')
        <!--fin header-->

        <div class="mc">
            <h1 class="products">Products</h1>
            <div class="boxpicture">
                @foreach ($products as $product)
                    <div class="picture2">
                        <a>{{ $product->nameproduct }}</a>
                        <img class="imgprd" src="{{ asset('storage/pictures/' . $product->picture) }}"
                            height="250" width="250">
                        <div class="button">
                            <form action="{{url('produit')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$product->id}}" name="id">
                                <a style="text-decoration: none;" href=""><button class="button_catalogue">buy now</button></a>
                            </form>
                            <a style="text-decoration: none;" href="{{ 'produit/' . $product->id }}"><button
                                    class="button_catalogue">See
                                    more</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!--footer-->
        @include ('footer')
        <!--fin footer-->


    </div>
</body>

</html>

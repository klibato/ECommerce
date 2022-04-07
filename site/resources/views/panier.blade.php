<html>

<head>
    <link rel="stylesheet" href="css/style_panier.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <!--header-->
        @include ('header')
        <!--fin header-->

            <table class="demo">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($panier_item_sort as $item)
                    @php $product = $products->where('id', $item->product_id)->first(); @endphp
                        <tr>
                            <td><img src="{{ asset('storage/pictures/' . $product->picture) }}"> {{$product->nameproduct}}</td>
                            <td>{{$panier_item->where('product_id', $product->id)->count()}}</td>
                            <td>{{$product->price * $panier_item->where('product_id', $product->id)->count()}}</td>
                            <td><form action="{{url('deleteproduct')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="submit" value="supprimer">
                                </form></td>
                        </tr>
                    <@endforeach>
                </tbody>
            </table>
        
        <a href="#" style="display: flex; justify-content: flex-end;text-decoration: none"><button
                class="button_catalogue">Buy</button></a>

        <!--fin tableau-->


        <!--footer-->
        @include ('footer')
        <!--fin footer-->
    </div>
</body>

</html>

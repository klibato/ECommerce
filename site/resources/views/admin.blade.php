<html>

<head>
    <link rel="stylesheet" href="css/style_admin.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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


        <div class="containerproduct">
            <form class="product" action="admin" method="post" enctype="multipart/form-data">
                @csrf
                <h1>Form</h1>
                <nav>
                    <ul>
                        <div style="margin: 10px;">
                            <a> Name of the product : </a><br>
                            <input type="text" name="nameproduct" />
                        </div>
                        <div style="margin: 10px;">
                            <a> Picture : </a><br>
                            <input type="file" name="picture" >
                        </div>
                        <div style="margin: 10px;">
                            <a> Description : </a><br>
                            <textarea id="story" name="description" rows="5"></textarea>
                        </div>
                        <div style="margin: 10px;">
                            <a> Price : </a><br>
                            <input type="number" step="0.01" name="price" />
                        </div>
                        <div style="margin: 10px;"> 
                            <a> Stock : </a><br>
                            <input type="number" name="stock" />
                        </div>
                    </ul>
                </nav>
                <button class="button_catalogue" type="submit">OK</button>
            </form>
        </div>

        <!--footer-->
        @include ('footer')
        <!--fin footer-->

    </div>
</body>
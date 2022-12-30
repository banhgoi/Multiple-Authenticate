<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/simplecartjs/3.0.5/simplecart.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <style>
        .nav-style a:link,
        .nav-style a:active {
            list-style-type: none;
            text-decoration: none;
        }

        #cart-icon{
            margin-top:-13vh;
            font-size:30px;
            color:#800000;
        }

        #logo {
            font: 3vmax Economica;
            letter-spacing: 0.3em;
            padding-top: 5px;
            line-height: 5vmax;
        }

        .nav-style {
            float: right;
            border-bottom: 1px solid black;
            padding:  2vh 5vw 12px 1vw;
        }

        nav ul li {
            display: inline-block;
            text-decoration: none;
        }

        .nav-style a {
            color: black;
            font: 1.1vmax Ariel;
        }

        nav ul li a:hover {
            font: 1.4vmax Ariel thick;
            font-weight: bold;
            text-decoration: none;
        }

        #sidenav {
            margin-top: 30px;
            position: absolute;
        }

        #sidenav a:link,
        p {
            margin: 16px 85px;
            display: block;
            font: 16px ariel;
            color: black;
        }
        h2{

            font-family:Ariel; font-weight:700;
        }
        .products-col {
            margin-left: 27vw;
        }

        .main {
            z-index: 3;
            position: relative;
            padding: 40px 10px 0 0;
        }

        .smaller-img {
            width: 20vw;
            height: 27vh;
        }

        figcaption {
            text-align: left;
        }

        figcaption span {
            font-weight: 700;
        }

        .flex-grid {
            display: flex;
            flex-flow: row wrap;
            margin: 0;
        }

        .col {
            flex: 0 1 22%;
            margin: 7px 4px;
            text-align:center;
            padding: 0 0 0 0 ;
        }

        h6{
            padding: 0 0 -27px 0 ;
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li id='logo' style='padding-top:0px'>JACK'S COFFEE SHOP</li>
            <li class='nav-style'>
                <a href='https://s.codepen.io/vperr007/debug/oWNyRR/PNrvYLNyjERM'>
                    <i class="fa fa-cart-plus" id='cart-icon' aria-hidden="true"></i>
                </a>
            </li>
            <li class='nav-style'><a href='{{ route('customer.login') }}'>LOGIN</a></li>
            <li class='nav-style'><a href='#'>ABOUT US</a></li>
            <li class='nav-style' id='shop'>SHOP</li>
            <li class='nav-style'>HOME</li>
        </ul>
    </nav>

    <div class='main'>

        <div id='sidenav'>
            <p style='font-size:25px'>SHOP</p>
            <a href='#' data-name='French'>French</a>
            <a href='#'>Colombian</a>
            <a href='#'>American</a>
            <a href='#'>Java</a>
            <a href='#'>Mocha</a>
            <a href='#'>Blue Mountain</a>
        </div>

        <div class='products-col'>
            <h2>PRODUCTS</h2>
            <div class='flex-grid'>
                <div class="simpleCart_shelfItem col">
                    <img src='https://c1.staticflickr.com/4/3927/33987376925_b7ca54ab9a_z.jpg'
                         class='smaller-img img-responsive item_thumb'>
                    <h6 class="item_name"> Blue Mountain </h6>
                    <span class="item_price">$150</span><br>
                    <a class="item_add" href="javascript:;"> Add to Cart </a>
                </div>

                <div class="simpleCart_shelfItem col">
                    <img src='https://c1.staticflickr.com/4/3939/33987376465_3feff40be8_z.jpg'
                         class='smaller-img img-responsive item_thumb'>
                    <h6 class="item_name"> Colombian </h6>
                    <span class="item_price">$35</span><br>
                    <a class="item_add" href="javascript:;"> Add to Cart </a>
                </div>

                <div class="simpleCart_shelfItem col">
                    <img src='https://c1.staticflickr.com/4/3947/33987376045_bab0901385_z.jpg'
                         class='smaller-img img-responsive item_thumb'>
                    <h5 class="item_name"> Java </h5>
                        <span class="item_price">$75</span><br>
                        <a class="item_add" href="javascript:;"> Add to Cart </a>
                </div>

                <div class="simpleCart_shelfItem col">
                    <img src='https://c1.staticflickr.com/3/2923/33175563003_0e1f3027cb_z.jpg'
                         class='smaller-img img-responsive item_thumb'>
                    <h6 class="item_name"> Pre-ground </h6>
                    <span class="item_price">$15</span><br>
                    <a class="item_add" href="javascript:;"> Add to Cart </a>
                </div>

                <div class="simpleCart_shelfItem col">
                    <img src='https://c1.staticflickr.com/3/2862/33175563343_d749df808e_z.jpg'
                         class='smaller-img img-responsive item_thumb'>
                    <h6 class="item_name"> American </h6>
                    <span class="item_price">$42</span><br>
                    <a class="item_add" href="javascript:;"> Add to Cart </a>
                </div>

                <div class="simpleCart_shelfItem col">
                    <img src='https://c1.staticflickr.com/3/2829/33175563553_800517b481_z.jpg'
                         class='smaller-img img-responsive item_thumb'>
                    <h6 class="item_name"> Mocha </h6>
                    <span class="item_price">$30</span><br>
                    <a class="item_add" href="javascript:;"> Add to Cart </a>
                </div>

            </div>

        </div>

    </div>
</body>
<script>
    simpleCart({
        checkout: {
            type: "PayPal",
            email: "you@yours.com"
        }
    });

    var items = 1;
    $(document).ready(function(){
        if (items != 0) {
            $("#cart-icon").append("<div class='simpleCart_quantity'></div>")
        }
    });
</script>
</html>

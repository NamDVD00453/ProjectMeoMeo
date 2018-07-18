@extends('layouts.default')

@section('content')

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> <!-- End of /.navbar-header -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav-main">
                    <li class="active"><a href="/">TRANG CHỦ</a></li>
                    <li class="dropdown">
                        <a href="#">
                            THỰC ĐƠN
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">

                            @foreach($listCategory as $key =>$category)
                                <li><a  href="/category/{{$category -> categoryId}}">{{$category -> categoryName}}</a></li>
                            @endforeach
                        </ul>
                    </li> <!-- End of /.dropdown -->
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="blog-single.html">VỀ MEOMEO</a></li>



                </ul> <!-- End of /.nav-main -->
            </div>	<!-- /.navbar-collapse -->
        </div>	<!-- /.container-fluid -->
    </nav>	<!-- End of /.nav -->


    <section id="topic-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Menu</h1>
                    <p>Các món ăn có sẵn.</p>
                </div>	<!-- End of /.col-md-4 -->
                <div class="col-md-8 hidden-xs">
                    <ol class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{$categoryName}}</li>
                    </ol>
                </div>	<!-- End of /.col-md-8 -->

            </div>	<!-- End of /.row -->
        </div>	<!-- End of /.container -->
    </section>	<!-- End of /#Topic-header -->

    <section id="shop">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="products-heading">
                        <h2>{{$categoryName}}</h2>
                    </div>	<!-- End of /.Products-heading -->
                    <div class="product-grid">
                        <ul>

                            @foreach($listProduct as $key =>$product)
                                <li>
                                    <div class="products">
                                        <a href="/product/{{$product->productId}}">
                                            <img src="{{$product -> img}}" alt="">
                                        </a>
                                        <a href="/product/{{$product->productId}}">
                                            <h4>{{$product -> productName}}</h4>
                                        </a>
                                        <p class="price">From: {{$product -> productPrice}}</p>
                                        <div >
                                            <a class="view-link shutter" onclick="add(this)" id="{{$product->productId}}" name="{{$product->productName}}">
                                                <i class="fa fa-plus-circle"></i>Add To Cart</a>
                                        </div>
                                    </div>	<!-- End of /.products -->
                                </li>
                        @endforeach

                        <!--  ... -->
                        </ul>
                    </div>	<!-- End of /.products-grid -->
                </div>	<!-- End of /.col-md-9 -->
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="block">
                            <h4>Catagories</h4>
                            <div class="list-group">
                                @foreach($listCategory as $key =>$category)
                                    <a href="/category/{{$category -> categoryId}}" class="list-group-item">
                                        <i class="fa  fa-dot-circle-o"></i>
                                        {{$category -> categoryName}}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="block">
                            <img src="images/food-ad.png" alt="">
                        </div>

                        {{--<div class="block">--}}
                            {{--<h4>Latest Food Items</h4>--}}
                            {{--<ul class="media-list">--}}
                                {{--<li class="media">--}}
                                    {{--<a class="pull-left" href="#">--}}
                                        {{--<img class="media-object" src="images/post-img.png" alt="...">--}}
                                    {{--</a>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<a href="" class="media-heading">Lamb leg roast--}}
                                            {{--<p>Lorem ipsum dolor sit amet.</p></a>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="media">--}}
                                    {{--<a class="pull-left" href="#">--}}
                                        {{--<img class="media-object" src="images/post-img-2.png" alt="...">--}}
                                    {{--</a>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<a href="" class="media-heading"> Lamingtons--}}
                                            {{--<p>Lorem ipsum dolor.</p></a>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="media">--}}
                                    {{--<a class="pull-left" href="#">--}}
                                        {{--<img class="media-object" src="images/post-img-3.png" alt="...">--}}
                                    {{--</a>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<a href="" class="media-heading">--}}
                                            {{--Anzac Salad--}}
                                            {{--<p>Lorem ipsum dolor sit.</p>--}}

                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        <div class="block">
                            <h4>Food Tag</h4>
                            <div class="tag-link">
                                <a href="">BALLET</a>
                                <a href="">CHRISTMAS</a>
                                <a href="">ELEGANCE</a>
                                <a href="">ELEGANT</a>
                                <a href="">SHOPPING</a>
                                <a href="">SHOP</a>
                            </div>
                        </div>
                    </div>	<!-- End of /.col-md-3 -->

                </div>	<!-- End of /.row -->
            </div>	<!-- End of /.container -->
        </div>
    </section>	<!-- End of Section -->

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length,c.length);
                }
            }
            return "";
        }
        function add(elm) {
            // var pName = $(elm).attr("name");

            var cart = Cookies.get("cart");
            if (!cart)
            {
                cart = {};
            } else
            {
                cart = JSON.parse(cart);
            }

            if (!cart[elm.id])
            {
                cart[elm.id] = 1;
            } else
            {
                cart[elm.id]++;
            }
            Cookies.set("cart", cart);
            alert(getCookie("cart"));
        }
</script>
@stop


<!-- MENU Start
================================================== -->

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
                    <li class="active"><a href="#">TRANG CHỦ</a></li>
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

    <!-- PRODUCTS Start
    ================================================== -->

    <section id="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="products-heading">
                        <h2>Tất cả món ăn</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($listProduct as $key =>$product)
                    <div class="col-md-3">
                        <div class="products">
                            <a href="/product/{{$product->productId}}">
                                <img src="{{$product -> img}}" alt="">
                            </a>
                            <a href="/product/{{$product->productId}}">
                                <h4>{{$product -> productName}}</h4>
                            </a>
                            <p class="price">{{$product -> productPrice}}</p>
                            <a class="view-link shutter" onclick="add(this)" id="{{$product->productId}}" name="{{$product->productName}}">
                                <i class="fa fa-plus-circle"></i>Add To Cart</a>
                        </div>	<!-- End of /.products -->
                    </div>	<!-- End of /.col-md-3 -->
                @endforeach

                {{$listProduct->links()}}

            </div>	<!-- End of /.row -->
        </div>	<!-- End of /.container -->
    </section>	<!-- End of Section -->


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
            alert('Item added to cart !')
        }
    </script>
@stop
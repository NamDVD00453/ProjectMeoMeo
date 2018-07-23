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


<!-- SLIDER Start
================================================== -->


<section id="slider-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="slider" class="nivoSlider">
                    <img src="https://i.imgur.com/goeqR3L.jpg" alt="" />
                    <img src="https://i.imgur.com/hTAygvl.jpg" alt=""/>
                    <img src="https://i.imgur.com/OTdsg29.jpg" alt="" />
                </div>	<!-- End of /.nivoslider -->
            </div>	<!-- End of /.col-md-12 -->
        </div>	<!-- End of /.row -->
    </div>	<!-- End of /.container -->
</section> <!-- End of Section -->



<!-- FEATURES Start
================================================== -->

<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="block">
                    <div class="media">
                        <div class="pull-left" href="#">
                            <i class="fa fa-ambulance"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Free Shipping</h4>
                            <p>Miễn phí ship nội thành Hà Nội với đơn hàng trên 50.000.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="media">
                        <div class="pull-left" href="#">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Fast Service</h4>
                            <p>Đồ ăn nhanh, đảm bảo vệ sinh và an toàn thực phẩm.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="media">
                        <div class="pull-left" href="#">
                            <i class=" fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Call Us</h4>
                            <p>Gọi đặt hàng: 0988 123 123.</p>
                        </div>	<!-- End of /.media-body -->
                    </div>	<!-- End of /.media -->
                </div>	<!-- End of /.block -->
            </div> <!-- End of /.col-md-4 -->
        </div>	<!-- End of /.row -->
    </div>	<!-- End of /.container -->
</section>	<!-- End of section -->



<!-- CATAGORIE Start
================================================== -->

<section id="catagorie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-heading">
                        <h2>DANH MỤC</h2>
                    </div>
                    <div class="row">

                        @foreach($listCategory as $key =>$category)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <a class="catagotie-head" href="/category/{{$category -> categoryId}}">
                                        <img src="{{$category -> categoryImg}}" class="img-thumbnail" alt="...">
                                        <h3>{{$category -> categoryName}}</h3>
                                    </a>
                                    <div class="caption">
                                        <p>Description ...</p>
                                        <p>
                                            <a href="blog-single.html" class="btn btn-default btn-transparent" role="button">
                                                <span>Đặt hàng</span>
                                            </a>
                                        </p>
                                    </div>	<!-- End of /.caption -->
                                </div>	<!-- End of /.thumbnail -->
                            </div>	<!-- End of /.col-sm-6 col-md-4 -->
                        @endforeach

                    </div>	<!-- End of /.row -->
                </div>	<!-- End of /.block -->
            </div>	<!-- End of /.col-md-12 -->
        </div>	<!-- End of /.row -->
    </div>	<!-- End of /.container -->
</section>	<!-- End of Section -->




<!-- PRODUCTS Start
================================================== -->

<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="products-heading">
                    <h2>Món ăn  nổi bật</h2>
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

        </div>	<!-- End of /.row -->
    </div>	<!-- End of /.container -->
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
        alert('Item added to cart !')
    }
</script>
@stop
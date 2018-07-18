<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MeoMeo Shop - Tận hưởng bữa ăn ngon tại nhà.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('index/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('index/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/responsive.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- jS -->
    <script src="{{asset('index/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('index/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('index/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('index/js/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('index/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('index/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('index/js/main.js')}}" type="text/javascript"></script>


</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->

<section id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="contact-action"><i class="fa fa-phone-square"></i>Mọi thắc mắc xin liên hệ sđt: <strong>+84 988 123123</strong></p>
            </div>
            <div class="col-md-3 clearfix">
                <ul class="login-cart">
                    <li>
                        <a data-toggle="modal" data-target="#myModal" href="#">
                            <i class="fa fa-user"></i>
                            Đăng nhập
                        </a>
                    </li>
                    <li>
                        <div class="cart dropdown">
                            <a data-toggle="dropdown" href="#"><i class="fa fa-shopping-cart"></i>Giỏ hàng (1)</a>
                            <div class="dropdown-menu dropup">
                                <span class="caret"></span>
                                <ul class="media-list">
                                    <li class="media">
                                        <img class="pull-left" src="https://cdn0.woolworths.media/content/wowproductimages/large/329812.jpg" alt="">
                                        <div class="media-body">
                                            <h6>Monster Energy
                                                <span>26000đ</span>
                                            </h6>
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-sm">Thanh toán</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <div class="search-box">
                    <div class="input-group">
                        <input placeholder="Search Here" type="text" class="form-control">
                        <span class="input-group-btn">
					        	<button class="btn btn-default" type="button"></button>
					      	</span>
                    </div><!-- /.input-group -->
                </div><!-- /.search-box -->
            </div>
        </div> <!-- End Of /.row -->
    </div>	<!-- End Of /.Container -->


    <!-- MODAL Start
        ================================================== -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
                </div>
                <div class="modal-body clearfix">

                    <form action="#" method="post" id="create-account_form" class="std">
                        <fieldset>
                            <h3>Tạo tài khoản</h3>
                            <div class="form_content clearfix">
                                <h4>Nhập địa chỉ Email của bạn.</h4>
                                <p class="text">
                                    <label for="email_create">Email</label>
                                    <span>
											<input placeholder="E-mail address"  type="text" id="email_create" name="email_create" value="" class="account_input">
					                    </span>
                                </p>
                                <p class="submit">
                                    <button class="btn btn-primary">Tạo tài khoản</button>
                                </p>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" method="post" id="login_form" class="std">
                        <fieldset>
                            <h3>Đã có tài khoản?</h3>
                            <div class="form_content clearfix">
                                <p class="text">
                                    <label for="email">Email</label>
                                    <span><input placeholder="E-mail address" type="text" id="email" name="email" value="" class="account_input"></span>
                                </p>
                                <p class="text">
                                    <label for="passwd">Mật khẩu</label>
                                    <span><input placeholder="Password" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
                                </p>
                                <p class="lost_password">
                                    <a href="#popab-password-reset" class="popab-password-link">Quên mật khẩu?</a>
                                </p>
                                <p class="submit">
                                    <button class="btn btn-success">Đăng nhập</button>
                                </p>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
</section>  <!-- End of /Section -->



<!-- LOGO Start
================================================== -->

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/02/Meo_logo.svg/1280px-Meo_logo.svg.png" alt="logo">
                </a>
            </div>	<!-- End of /.col-md-12 -->
        </div>	<!-- End of /.row -->
    </div>	<!-- End of /.container -->
</header> <!-- End of /Header -->




<!-- MENU Start
================================================== -->

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
                                    <a href="#">
                                        <img src="{{$product -> img}}" alt="">
                                    </a>
                                    <a href="#">
                                        <h4>{{$product -> productName}}</h4>
                                    </a>
                                    <p class="price">From: {{$product -> productPrice}}</p>
                                    <div >
                                        <a class="view-link shutter" href="#">
                                            <i class="fa fa-plus-circle"></i>Add To Cart</a>
                                    </div>
                                </div>	<!-- End of /.products -->
                            </li>
                    @endforeach

                        <!--  ... -->
                    </ul>
                </div>	<!-- End of /.products-grid -->

                <!-- Pagination -->

                {{--<div class="pagination-bottom">--}}
                    {{--<ul class="pagination">--}}
                        {{--<li class="disabled"><a href="#">&laquo;</a></li>--}}
                        {{--<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#">4</a></li>--}}
                        {{--<li><a href="#">»</a></li>--}}
                    {{--</ul>	<!-- End of /.pagination -->--}}
                {{--</div>--}}
            </div>	<!-- End of /.col-md-9 -->
            <div class="col-md-3">
                <div class="blog-sidebar">
                    <div class="block">
                        <h4>Catagories</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <i class="fa  fa-dot-circle-o"></i>
                                Italian Foods
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa  fa-dot-circle-o"></i>
                                Traditional Food
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa  fa-dot-circle-o"></i>
                                Indian Food
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa  fa-dot-circle-o"></i>
                                Spanish Food
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa  fa-dot-circle-o"></i>
                                Thai FoodN
                            </a>
                        </div>
                    </div>
                    <div class="block">
                        <img src="images/food-ad.png" alt="">
                    </div>
                    <div class="block">
                        <h4>Latest Food Items</h4>
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/post-img.png" alt="...">
                                </a>
                                <div class="media-body">
                                    <a href="" class="media-heading">Lamb leg roast
                                        <p>Lorem ipsum dolor sit amet.</p></a>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/post-img-2.png" alt="...">
                                </a>
                                <div class="media-body">
                                    <a href="" class="media-heading"> Lamingtons
                                        <p>Lorem ipsum dolor.</p></a>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/post-img-3.png" alt="...">
                                </a>
                                <div class="media-body">
                                    <a href="" class="media-heading">
                                        Anzac Salad
                                        <p>Lorem ipsum dolor sit.</p>

                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

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

<!-- CALL TO ACTION Start
================================================== -->

<section id="call-to-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-heading">
                        <h2>Đối tác</h2>
                    </div>
                </div>	<!-- End of /.block -->
                <div id="owl-example" class="owl-carousel">
                    <div> <img src="https://s3-us-west-2.amazonaws.com/meweb-us-prod/production/skin/default/img/monster-energy-logo-on-white.png" alt=""></div>
                    <div> <img src="https://s3-us-west-2.amazonaws.com/meweb-us-prod/production/skin/default/img/monster-energy-logo-on-white.png" alt=""></div>
                    <div> <img src="https://s3-us-west-2.amazonaws.com/meweb-us-prod/production/skin/default/img/monster-energy-logo-on-white.png" alt=""></div>
                    <div> <img src="https://s3-us-west-2.amazonaws.com/meweb-us-prod/production/skin/default/img/monster-energy-logo-on-white.png" alt=""></div>
                    <div> <img src="https://s3-us-west-2.amazonaws.com/meweb-us-prod/production/skin/default/img/monster-energy-logo-on-white.png" alt=""></div>
                    <div> <img src="https://s3-us-west-2.amazonaws.com/meweb-us-prod/production/skin/default/img/monster-energy-logo-on-white.png" alt=""></div>
                    <div> <img src="https://s3-us-west-2.amazonaws.com/meweb-us-prod/production/skin/default/img/monster-energy-logo-on-white.png" alt=""></div>
                    <div> <img src="https://s3-us-west-2.amazonaws.com/meweb-us-prod/production/skin/default/img/monster-energy-logo-on-white.png" alt=""></div>
                    <div> <img src="https://s3-us-west-2.amazonaws.com/meweb-us-prod/production/skin/default/img/monster-energy-logo-on-white.png" alt=""></div>


                </div>	<!-- End of /.Owl-Slider -->
            </div>	<!-- End of /.col-md-12 -->
        </div> <!-- End Of /.Row -->
    </div> <!-- End Of /.Container -->
</section>	<!-- End of Section -->



<!-- FOOTER Start
================================================== -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="block clearfix">
                    <a href="/">
                        <img src="https://i.imgur.com/y59pdrW.png" alt="">
                    </a>
                    <p>
                        MeoMeo Shop cam kết mang đến cho bạn bữa ăn ngon và nhanh nhất, đảm bảo an toàn vệ sinh, phục vụ 24/7.
                    </p>
                    <h4 class="connect-heading">CONNECT WITH US</h4>
                    <ul class="social-icon">
                        <li>
                            <a class="facebook-icon" href="#">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="plus-icon" href="#">
                                <i class="fab fa-google-plus-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter-icon" href="#">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pinterest-icon" href="#">
                                <i class="fab fa-pinterest-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="linkedin-icon" href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>	<!-- End Of /.social-icon -->
                </div>	<!-- End Of /.block -->
            </div> <!-- End Of /.Col-md-4 -->
            <div class="col-md-4">
                <div class="block">
                    <h4>ĐỊA CHỈ</h4>
                    <p ><i class="fa  fa-map-marker"></i> <span>MeoMeo Shop,</span> Số 8 Tôn Thất Thuyết, Phường Mĩ Đình - Từ Liêm</p>
                    <p> <i class="fa  fa-phone"></i> <span>Phone:</span> (+84) 98 123 123 </p>

                    <p> <i class="fa  fa-mobile"></i> <span>Mobile:</span> (+84) 98 123 123</p>

                    <p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>contact@meomeoshop.com</span></p>
                </div>	<!-- End Of /.block -->
            </div> <!-- End Of Col-md-3 -->
            <div class="col-md-4">
                <div class="block">
                    <h4>SẮP CÓ TẠI MEOMEO SHOP</h4>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="https://i.imgur.com/F8QxdI6.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="https://i.imgur.com/F8QxdI6.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="https://i.imgur.com/F8QxdI6.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="https://i.imgur.com/F8QxdI6.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="https://i.imgur.com/F8QxdI6.jpg" alt="...">
                        </a>
                        <a class="pull-left" href="#">
                            <img class="media-object" src="https://i.imgur.com/F8QxdI6.jpg" alt="...">
                        </a>
                    </div>	<!-- End Of /.media -->
                </div>	<!-- End Of /.block -->
            </div> <!-- End Of Col-md-3 -->
        </div> <!-- End Of /.row -->
    </div> <!-- End Of /.Container -->



    <!-- FOOTER-BOTTOM Start
    ================================================== -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="cash-out pull-left">
                        <li>
                            <a href="#">
                                <img src="images/American-Express.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/PayPal.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/Maestro.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/Visa.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/Visa-Electron.png" alt="">
                            </a>
                        </li>
                    </ul>
                    <p class="copyright-text pull-right">MeoMeo Shop @2018 Designed by <a href="#">Focus Team</a> All Rights Reserved</p>
                </div>	<!-- End Of /.col-md-12 -->
            </div>	<!-- End Of /.row -->
        </div>	<!-- End Of /.container -->
    </div>	<!-- End Of /.footer-bottom -->
</footer> <!-- End Of Footer -->

<a id="back-top" href="#"></a>
</body>
</html>
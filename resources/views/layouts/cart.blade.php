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
                        <li class="active">Cart</li>
                    </ol>
                </div>	<!-- End of /.col-md-8 -->

            </div>	<!-- End of /.row -->
        </div>	<!-- End of /.container -->
    </section>	<!-- End of /#Topic-header -->

    <section id="product">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="products-heading">
                        <h2>Giỏ hàng</h2>
                    </div>	<!-- End of /.Products-heading -->
                    <div class="product-grid">
                        @foreach($listOrder as $key => $value)
                        <div class="row" id="row-{{$value['productId']}}">
                            <div class="col-md-4">
                                <img class="thumbnail" src="{{$value['img']}}" alt="">
                            </div>
                            <div class="col-md-4">
                                <h4>{{$value['productName']}}</h4>
                                </a>
                                <p class="price">Price: {{$value['price']}}</p>
                            </div>
                            <div class="col-md-2">
                                <h3>Quantity: {{$value['quantity']}}</h3>
                            </div>
                            <div class="col-md-1">
                                <button type="button" onclick="del(this)" class="btn btn-danger" id="{{$value['productId']}}">Delete</button>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="products-heading">
                            <h2></h2>
                        </div>
                        @endforeach
                    </div>	<!-- End of /.products-grid -->
                </div>	<!-- End of /.col-md-9 -->
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="block">
                            <h4>Total: </h4>
                            <h5>{{$total}} VND</h5>

                            <h2>Customer's Information</h2>
                            <form action="">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Customer's Name</label>
                                        <input type="text" class="form-control" placeholder="Enter fullname" name="productName">
                                    </div>

                                    <div class="form-group">
                                        <label>Customer's Phone</label>
                                        <input type="text" class="form-control" placeholder="Enter phone number" name="productName">
                                    </div>

                                    <div class="form-group">
                                        <label>Customer's Address</label>
                                        <textarea class="form-control" rows="3" name="productDesc" placeholder="Enter address"></textarea>
                                    </div>



                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Checkout</button>
                                </div>
                            </form>
                        </div>
                    </div>	<!-- End of /.col-md-3 -->

                </div>	<!-- End of /.row -->
            </div>	<!-- End of /.container -->
        </div>
    </section>	<!-- End of Section -->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script>
        function del(elm) {

            var cart = JSON.parse(Cookies.get("cart"));
            var id = elm.id;
            delete cart[id];
            Cookies.set("cart", cart);
            var rowId = 'row-' + elm.id;
            $( "#" + rowId).remove();
            alert("Item Deleted!");
        }
    </script>


@stop

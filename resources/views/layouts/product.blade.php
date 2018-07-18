@extends('layouts.default')

@section('content')

    <<!-- breadcrumb Start
    ================================================== -->

    <section id="topic-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>{{$product->productName}}</h1>
                    <p></p>
                </div>	<!-- /.col-md-4 -->
                <div class="col-md-8 hidden-xs">
                    <ol class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li class="active">Sản phẩm</li>
                        <li class="active">{{$product->productName}}</li>
                    </ol>
                </div> <!-- /.col-md-8 -->
            </div>	<!-- /.row -->
        </div>	<!-- /.container-->
    </section><!-- /Section -->




    <section id="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    {{--<div class="single-product-img">--}}
                        <img class="thumbnail" src="{{$product->img}}" alt="">
                    {{--</div>--}}

                </div> <!-- End of /.col-md-5 -->
                <div class="col-md-5">
                    <div class="block">
                        <div class="product-des">
                            <h4>{{$product->productName}}</h4>
                            <p class="price">{{$product->productPrice}}</p>
                            <p>{{$product->productDesc}}</p>
                            <a class="view-link" href="#"><i class="fa fa-plus-circle"></i>Add to Cart</a>
                        </div>	<!-- End of /.product-des -->
                    </div> <!-- End of /.block -->
                </div>	<!-- End of /.col-md-4 -->
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="block">
                            <h4 class="top-catagori-heading">Latest Food Items</h4>
                            <ul class="media-list">
                            </ul>	<!-- End of /.media-list -->
                        </div>	<!-- End of /.block -->

                    </div>	<!-- End of /.blog-sidebar -->

                </div>	<!-- End of /.col-md-3 -->
            </div>	<!-- End of /.row -->
            <div class="row">
                <div class="col-md-9">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">More Info</a></li>
                        <li><a href="#profile" data-toggle="tab">Comments</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <p>{{$product->productDesc}}</p>
                        </div>
                        <div class="tab-pane" id="profile">
                            <p>No customer comments for the moment.</p>
                        </div>
                    </div>
                </div>	<!-- End of /.col-md-9 -->
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="block">
                            <img src="images/food-ad.png" alt="">
                        </div> <!-- End of /.block -->
                    </div>	<!-- End of /.blog-sidebar -->
                </div>	<!-- End of /.col-md-3 -->
            </div>	<!-- End of /.row -->
        </div>	<!-- End of /.Container -->
    </section> <!-- End of /.Single-product -->

@stop
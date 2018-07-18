@extends('adminlayouts.layouts')
@section('bodycontent')

    <div class="content-wrapper">
        <section class="content">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listProduct as $key =>$product)
                        <tr>
                            <td>{{$product -> productId}}</td>
                            <td>{{$product -> productName}}</td>
                            <td>{{$product -> productDesc}}</td>
                            <td>{{$product -> productPrice}}</td>
                            <td>{{$product -> categoryId}}</td>
                            <th>
                                <a class="btn btn-app" href="//{{$product -> productId}}" method="get">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                            </th>
                            <th>
                                <a class="btn btn-app" href="/admin/product/delete/{{$product -> productId}}" method="post">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <!-- /.content -->
    </div>

@stop

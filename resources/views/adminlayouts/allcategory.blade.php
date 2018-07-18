@extends('adminlayouts.main')
@section('bodycontent')

<div class="content-wrapper">
    <section class="content">
        <div class="col-xs-4 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listCategory as $key =>$category)
                <tr>
                    <td>{{$category -> categoryId}}</td>
                    <td>{{$category -> categoryName}}</td>
                    <th>
                        <a class="btn btn-app" href="/admin/category/{{$category -> categoryId}}" method="get">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </th>
                    <th>
                        <a class="btn btn-app" href="/admin/category/delete/{{$category -> categoryId}}" method="post">
                            <i class="fa fa-trash"></i> Delete
                        </a>
                    </th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-xs-8">
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" method="post" action="/category/insert">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>Category's Name</label>
                            <input type="text" class="form-control" placeholder="Enter category's name ..." name="categoryName">
                        </div>

                        <div class="form-group">
                            <label>Category's Url Image</label>
                            <input type="text" class="form-control" placeholder="Enter category's img url ..." name="img">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@stop

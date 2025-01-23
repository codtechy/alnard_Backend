@extends('layouts.admin')


@section('content')
    <div style="margin-left:10px" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Products
                {{-- <small>advanced tables</small> --}}
            <small><a style="color: orange" href="/products/create/">Add Category</a></small>


            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Data</a></li>
                <li class="active">Products</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>Name</th>
                                       
                                        <th>Category</th>

                                        <th>Image</th>
                                        <th>Action</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $item)
                                        <tr>
                                       
                                            <td>{{ $item->title }}</td>
                                            
                                            <td>{{ $item->category->Name }}</td>

                                            <td><img style="width: 120px;height:120px ;"
                                                    src="/uploads/product/{{ $item->image }}" alt=""></td>

                                            <td><a href="/products/{{ $item->id }}/edit"><button class="btn btn-warning"
                                                        type="submit">Edit</button></a></td>

                                            <td>
    <form action="{{ route('products.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
        @csrf
        @method('DELETE')
        <button class="btn btn-warning" type="submit">Delete</button>
    </form>
</td>

                                        </tr>
                                    @endforeach

                                </tbody>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>




                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@extends('layouts.admin')

<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

@section('content')


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if (Session::has('status'))
        <p class="alert alert-info">{{ Session::get('status') }}</p>
    @endif

    <section class="content-header">
        <h1>
            Product Uploading
            {{-- <small>preview of simple tables</small> --}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        {{-- <h3 class="box-title">Banner Uploading</h3> --}}
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('/services') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="box-body pad">

                        
                              <br>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Name of Product</label>
                                    <input type="name" class="form-control" required="" name="title"
                                        placeholder=" Enter The Name of Product">
                                </div>


                                <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea id="summary-ckeditor" class="ckeditor form-control" name="words"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Price of Product</label>
                                    <input type="number" class="form-control" required="" name="price"
                                        placeholder=" Enter The Price of Product">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image of Product</label>
                                    <input type="file" required="" name="file">

                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>


    <script>
        CKEDITOR.replace('summary-ckeditor');
    </script>



@endsection

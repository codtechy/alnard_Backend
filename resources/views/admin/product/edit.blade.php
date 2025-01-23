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
            Product Editing
            {{-- <small>preview of simple tables</small> --}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Edit</li>
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
                    <form style="margin-left: 10px;" method="post" action="/products/{{ $products->id }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">



                        <div class="form-group">
                            <label for="exampleInputEmail1">Name of Product </label>
                            <input type="name" class="form-control" required="" value="{{ $products->title }}"
                                name="name" placeholder=" Product">
                        </div>

                        <div class="form-group">
                            <label for="category">Select Category</label>
                            <select name="category_id" id="category" class="form-control" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == old('category_id', $products->category_id) ? 'selected' : '' }}>
                                        {{ $category->Name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>





                        <div class="form-group">
                            <label for="exampleInputFile">Image of Product</label>
                            <input type="file" value="{{ $products->image }}" name="file">
                            <br>
                            <td><img style="width: 120px;height:120px ;" src="/uploads/product/{{ $products->image }}"
                                    alt=""></td>
                        </div>


                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
        CKEDITOR.replace('summary-ckeditor');
    </script>


@endsection

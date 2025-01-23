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
        <div  class="row">
            <!-- left column -->
            <div  class="col-md-12">

                <div  class="box box-primary">
                    <div class="box-header with-border">
                        {{-- <h3 class="box-title">Banner Uploading</h3> --}}
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form style="margin-left: 10px;" method="post" action="{{ action('serviceController@update', $id) }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">


                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name of Product </label>
                            <input type="name" class="form-control" required="" value="{{ $banner->title }}"
                                name="title" placeholder=" Product">
                        </div>
                     
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea id="summary-ckeditor" class="ckeditor form-control" name="words">{{$banner->words}}</textarea>
                            </div>

                       
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Price of Product</label>
                                <input value="{{$banner->price}}" type="number" class="form-control" required="" name="price"
                                    placeholder=" Enter The Price of Product">
                            </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image pf Product</label>
                            <input type="file" value="{{ $banner->image }}" name="file">
                            <br>
                            <td><img style="width: 120px;height:120px ;" src="/uploads/service/{{ $banner->image }}"
                                    alt=""></td>

                            {{-- <p class="help-block">Example block-level help text here.</p> --}}
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

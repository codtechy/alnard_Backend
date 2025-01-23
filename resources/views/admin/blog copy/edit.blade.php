@extends('layouts.admin')

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

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


          @if(Session::has('status'))
<p class="alert alert-info">{{ Session::get('status') }}</p>
@endif

 <section class="content-header">
      <h1>
        Blog Editing
        {{-- <small>preview of simple tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>

   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">

        <div style="padding-left: 10px" class="box box-primary">
            <div style="padding-left: 10px" class="box-header with-border">
              {{-- <h3 class="box-title">Banner Uploading</h3> --}}
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <form method="post" action="{{action('blogController@update', $id)}}" enctype="multipart/form-data">
            	{{csrf_field()}}
               <input name="_method" type="hidden" value="PATCH">
          
                   <div class="form-group">
                  <label for="exampleInputEmail1"> Name</label>
                  <input type="name" class="form-control" required="" value="{{ $banner->name }}" name="name" placeholder=" Name">
                </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Date </label>
                  <input type="date" class="form-control" required="" value="{{ $banner->date }}" name="date" placeholder=" Title">
                </div>


                  <div class="form-group">
                  <label for="exampleInputEmail1">Title </label>
                  <input type="name" class="form-control" required="" value="{{ $banner->title }}" name="title" placeholder=" Title">
                </div>

                
                <textarea class="form-control" name="words" id="summary-ckeditor" value="{{ $banner->words }}" name="summary-ckeditor">{!! $banner->words !!}</textarea>

                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file"  value="{{ $banner->image }}" name="file">
                 <td><img style="width: 120px;height:120px ;" src="/uploads/blogs/{{$banner->image}}" alt=""></td>

                  {{-- <p class="help-block">Example block-level help text here.</p> --}}
                </div>


              <div class="box-footer">
                <button type="submit"  class="btn btn-primary">Submit</button>
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
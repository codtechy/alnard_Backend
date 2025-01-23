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
        Blog Uploading
        {{-- <small>preview of simple tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blog</a></li>
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
            <form role="form" action="{{ url('/blogs') }}" method="post" enctype="multipart/form-data">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="box-body pad">

                   

            
                   <div class="form-group">
                  <label for="exampleInputEmail1"> Name</label>
                  <input type="name" class="form-control" required="" name="name" placeholder=" Name">
                </div>


                   <div class="form-group">
                  <label for="exampleInputEmail1"> Title</label>
                  <input type="name" class="form-control" required="" name="title" placeholder=" Title">
                </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1"> Date</label>
                  <input type="date" class="form-control" required="" name="date" placeholder=" Date">
                </div>

                <textarea class="ckeditor form-control" name="words"></textarea>
                
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" required="" name="file">

                  {{-- <p class="help-block">Example block-level help text here.</p> --}}
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


<script type="text/javascript">
    CKEDITOR.replace(jQuery('.ckeditor'));
</script>



@endsection

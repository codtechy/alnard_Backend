@extends('layouts.admin')


@section('content')


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
        Gallery Image
        {{-- <small>preview of simple tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Gallery Image</a></li>
        <li class="active">Create</li>
      </ol>
    </section>
 
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

        <div class="box box-primary">
            <div class="box-header with-border">
              {{-- <h3 class="box-title">Banner Uploading</h3> --}}
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('offer')}}" method="post" enctype="multipart/form-data">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Upload </label>
                  <input type="file" name="file" required="" id="exampleInputFile">

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
</section>

@endsection
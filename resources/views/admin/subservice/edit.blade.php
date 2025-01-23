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
        Service Editing
        {{-- <small>preview of simple tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Service</a></li>
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
         <form method="post" action="{{action('subserviceController@update', $banner->id)}}" enctype="multipart/form-data">
            	{{csrf_field()}}
               <input name="_method" type="hidden" value="PATCH">
              <div class="box-body">
               
                 
                <label for="exampleInputEmail1"> Select Section</label>
                <select name="service" class="form-control select2" style="width: 100%;">
                  <option value="{{$banner->service}}" selected="selected">{{$banner->service}} </option>
                  <option value="Google Street">Google Street</option>
                  <option value="3D Virtual Tour ">3D Virtual Tour 
                  </option>
                  <option value="2D Virtual Tour">2D Virtual Tour</option>
                
                  
                </select>
                    <div class="form-group">
                  <label for="exampleInputEmail1">Youtube Link</label>
                  <input type="name" class="form-control" required="" value="{{ $banner->u_link }}" name="u_link" placeholder="">
                </div>
             
             

              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit"  class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
  </div>
</section>

@endsection
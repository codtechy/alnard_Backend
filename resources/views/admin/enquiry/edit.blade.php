@extends('layouts.admin')

<br>
@section('content')


 
          @if(Session::has('status'))
<p class="alert alert-info">{{ Session::get('status') }}</p>
@endif
 
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          
             @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="content-header">
      <h1>
        Banner Editing
        {{-- <small>preview of simple tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Banner</a></li>
        <li class="active">Editing</li>
      </ol>
    </section>
    @section('content')

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Banner Uploading</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <form method="post" action="{{action('bannercontroller@update', $id)}}" enctype="multipart/form-data">
            	{{csrf_field()}}
               <input name="_method" type="hidden" value="PATCH">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Banner Name</label>
                  <input type="name" class="form-control" required="" value="{{ $banner->name }}" name="name" placeholder="Banner Name">
                </div>
             
             

                <div class="form-group">
                  <label  for="exampleInputFile">File input</label>
                  <input type="file" name="image" class="form-control" value="{{$banner['image']}}" >
                                        <label>{{$banner['image']}}</label><br><br> 
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
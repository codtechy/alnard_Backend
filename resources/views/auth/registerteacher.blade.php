@extends('layouts.admin')

<br>
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
        Blog Uploading
        {{-- <small>preview of simple tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="\home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Create</li>
      </ol>
    </section>
 
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

        <div class="box box-primary">
            <div class="box-header with-border">
              {{-- <h3 class="box-title">Teacher Adding</h3> --}}
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ action('blogController@store') }}" method="post" enctype="multipart/form-data">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select Class</label>
                                    <select class="form-control" name="name">
                                      <option class="form-control" >Select The Class</option>
                                      @foreach($table as $item)



                                        <option required="" name="name"  class="form-control" value="{{$item->id}}">{{$item->name}}</option>
                                      @endforeach
                                 </select>
                             </div>
                </div>
                <div class="form-group">
                  <label>Name of Auther</label>
                  <input type="text" name="auther" required="" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" required="" class="form-control" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label>Date of bloging</label>
                  <input type="date" name="date" required="" class="form-control" placeholder="Enter date">
                </div>
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" name="description" required="" rows="3" 
                  placeholder="Enter description"></textarea>
                </div>
             
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" required="" name="image" >

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
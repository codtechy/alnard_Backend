@extends('layouts.admin')

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

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
        Client Say Uploading
        {{-- <small>preview of simple tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Client Say</a></li>
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
         <form method="post" action="{{action('sayController@update', $id)}}" enctype="multipart/form-data">
            	{{csrf_field()}}
               <input name="_method" type="hidden" value="PATCH">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Name</label>
                  <input type="name" class="form-control" required="" value="{{ $banner->name }}" name="name" placeholder=" Name">
                </div>
             

                    <div class="form-group">
                  <label for="exampleInputEmail1">Designation </label>
                  <input type="name" class="form-control" required="" value="{{ $banner->designation }}" name="designation" placeholder=" Designation">
                </div>

                
                     <div class="form-group">
                  <label for="exampleInputEmail1">Words</label>
               <textarea   name="words" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $banner->words }}</textarea>
                </div>
             

                <div class="form-group">
                  <label  for="exampleInputFile">File input</label>
                  <input type="file" name="file" class="form-control" value="{{$banner['image']}}" >
                                        <br><br> 
                                           <td><img style="width: 120px;height:120px ;" src="/uploads/clientsays/{{$banner->image}}" alt=""></td>


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
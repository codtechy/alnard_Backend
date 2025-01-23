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
        Category Editing
        {{-- <small>preview of simple tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category</a></li>
        <li class="active">Edit</li>
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
         <form method="post" action="{{action('categoryController@update', $id)}}" enctype="multipart/form-data">
            	{{csrf_field()}}
               <input name="_method" type="hidden" value="PATCH">
            
                    {{-- <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Country</label>
                                        <select class="form-control" name="country_id">
                                          <option class="form-control" >Select The Country</option>
                                          @foreach($table as $item)
                                                                               <option value="{{ $item->id }}"{{$product->country_id == $item->id ? "selected" : "" }}>{{ $item->country}} </option>

                                          @endforeach
                                     </select>
                                 </div>
                    </div> --}}

            
                   <div class="form-group">
                  <label for="exampleInputEmail1"> Name</label>
                  <input type="name" class="form-control" required="" value="{{ $category->Name }}" name="name" placeholder=" Name">
                </div>



              <div class="box-footer">
                <button type="submit"  class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
  </div>
</section>

@endsection
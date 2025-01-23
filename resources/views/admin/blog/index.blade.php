@extends('layouts.admin')


@section('content')


<div style="margin-left:10px" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Properties
        {{-- <small>advanced tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data</a></li>
        <li class="active">Properties</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th colspan="">Action</th>
                  <th colspan="">Action</th>
                 
                </tr>
                </thead>
                <tbody>

                  @foreach ($says as $ban)
                      
                  
                  <tr>
                    <td>{{ $ban->name }}</td>
                    <td>{{ $ban->title }}</td>
                    <td>{{ $ban->date }}</td>
                    <td>{!! $ban->words !!}</td>



                    <td><img style="width: 120px;height:120px ;" src="/uploads/blogs/{{ $ban->image }}"
                            alt=""></td>


                    <td><a href="/blogs/{{ $ban->id }}/edit"><button class="btn btn-warning"
                                type="submit">Edit</button></a></td>


                    <td>
                        <form action="{{ action('blogController@destroy', $ban->id) }}" method="post">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="DELETE">
                            <button onclick="if (confirm('Are you sure..?')) commentDelete(1); return false"
                                class="btn btn-warning" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
             
</tbody>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>




          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


@endsection

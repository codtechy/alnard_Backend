@extends('layouts.admin')


@section('content')


<div style="margin-left:10px" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gallery Images
        <!-- <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach ($banner as $ban)
                <tr>
                  <td><img style="width:120px;height:120px ;" src="/uploads/offer/{{ $ban->image }}"
                                            alt=""></td>
                                            
                                            <td>
                                        <form action="{{ action('offerController@destroy', $ban->id) }}" method="post">
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

@extends('layouts.admin')


@section('content')
    <div style="margin-left:10px" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Enquiry List
                {{-- <small>advanced tables</small> --}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Data</a></li>
                <li class="active">Enquiry List</li>
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

                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>

                                        <th>Subject</th>
                                        <th>Message </th>
                                        {{-- <th>Action</th>
                                        <th>Action</th> --}}


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($says as $item)
                                        <tr>

                                            <td>{{ $item->fname }}</td>
                                            <td>{{ $item->lname }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->subject }}</td>
                                            <td>{{ $item->message }}</td>

                                            {{-- <td><img style="width: 120px;height:120px ;"
                                                    src="/uploads/service/{{ $item->image }}" alt=""></td>

                                            <td><a href="/services/{{ $item->id }}/edit"><button class="btn btn-warning"
                                                        type="submit">Edit</button></a></td> --}}
                                            {{-- 
                                            <td>
                                                <form action="{{ action('serviceController@destroy', $item->id) }}"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button
                                                        onclick="if (confirm('Are you sure..?')) commentDelete(1); return false"
                                                        class="btn btn-warning" type="submit">Delete</button>
                                                </form>

                                            </td> --}}

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

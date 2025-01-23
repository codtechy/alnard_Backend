@extends('layouts.admin')


@section('content')


    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }

        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text],
        .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }
    </style>



    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


@section('content')
    @if (Session::has('status'))
        <p class="alert alert-info">{{ Session::get('status') }}</p>
    @endif

    <section class="content-header">
        <h1>
            Video Link List
            {{-- <small>preview of simple tables</small> --}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Video Link</a></li>
            <li class="active">Create</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        {{-- <h3 class="box-title">Images</h3> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">


                        <table class="table table-bordered">
                            <tr>
                                <th>Image</th>
                               
                                <th colspan="2">Action</th>
                            </tr>
                            @foreach ($banner as $ban)
                                <tr>
                                   
                                    <td>{{ $ban->video }}</td>

                               
                            <td><a href="/video/{{ $ban->id }}/edit"><button class="btn btn-warning"
                                                        type="submit">Edit</button></a></td>

                                </tr>
                            @endforeach

                        </table>
                    </div>
                    <!-- /.box-body -->
                    {{-- <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div> --}}
                </div>
                <!-- /.box -->
                {{-- <button class="open-button" onclick="openForm()">Add New Banner</button> --}}

                <div class="form-popup" id="myForm">
                    <form action="{{ url('banner') }}" method="post" enctype="multipart/form-data"
                        class="form-container">
                        {{ csrf_field() }}
                        <h1>Add Banner</h1>

                        <label for="exampleInputFile">Banner Image</label>
                        <input type="file" name="file" required="" id="exampleInputFile">
                        <br>
                        <button type="submit" name="submit" class="btn">Add</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                    </form>
                </div>



    </section>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

@endsection

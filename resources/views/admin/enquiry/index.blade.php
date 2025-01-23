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
            Enquiry List
            {{-- <small>preview of simple tables</small> --}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Enquiry</a></li>
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
                                {{-- <th style="width: 10px">#</th> --}}
                                <th>Name</th>
                                
                                <th>Phone Number</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($says as $ban)
                                <tr>
                                    <td>{{ $ban->name }}</td>
                                  
                                    <td>{{ $ban->phone }}</td>
                                    <td>{{ $ban->subject }}</td>
                                    <td>{{ $ban->message }}</td>




                                    <td>
                                        <form action="{{ action('enquiryController@destroy', $ban->id) }}" method="post">
                                            {{ csrf_field() }}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button onclick="if (confirm('Are you sure..?')) commentDelete(1); return false"
                                                class="btn btn-warning" type="submit">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>




    </section>


@endsection

@extends('admin-panel.layout.base')
@section('title','| Admin List')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Admin Lists</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Admin List</li>
        </ol>
    </div>  
</div>

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">All Admin</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email Id</th>
                                    <th>Phone No.</th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->phone}}</td>
                                        <td>Admin</td>
                                        {{-- <td class="text-center">
                                            <button type="button" class="btn btn-rounded  btn-outline-info"> 
                                                <i class="mdi mdi-pencil-box"></i> 
                                                View details
                                            </button>
                                        </td> --}}
                                    </tr>
                                @endforeach
                                
                                
                                  
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
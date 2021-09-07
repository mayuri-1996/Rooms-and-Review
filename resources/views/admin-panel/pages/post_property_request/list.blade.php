@extends('admin-panel.layout.base')
@section('title','| All Post Property Request User List')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Post Property Request User List</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Post Property Request</li>
            <li class="breadcrumb-item active">Lists All Users</li>
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
                <div class="card-header row">
                    <h4 class="m-b-0 text-white col-md-6">All Post Property Request User List</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl no</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $key=>$list)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$list->post_property_requests_to_buyers->name}}</td>
                                        <td>{{$list->post_property_requests_to_buyers->phone}}</td>
                                        <td>{{$list->address}}</td>
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
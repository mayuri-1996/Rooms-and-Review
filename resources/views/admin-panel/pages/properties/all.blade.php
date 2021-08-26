@extends('admin-panel.layout.base')
@section('title','| All Property List')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Property Lists</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Properties</li>
            <li class="breadcrumb-item active">Property Lists</li>
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
                    <h4 class="m-b-0 text-white col-md-6">All Property Lists</h4>
                    <div class="col-md-6 text-right">
                        <a href="{{route('admin.add.property')}}">
                            <button type="button" class="btn btn-danger"><i class="fa fa-plus"></i> Add New Property</button>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Owner</th>
                                    <th>Phone No.</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $property)
                                    <tr>
                                        
                                        <td>{{$property->property_title}}</td>
                                        <td>
                                            {{$property->properties_to_property_addresses->property_addresses_to_zone_cities->city_name}},
                                            {{$property->properties_to_property_addresses->property_addresses_to_zones->zone_name}}
                                        </td>
                                        <td>{{$property->properties_to_buyers->name}}</td>
                                        <td>{{$property->properties_to_buyers->phone}}</td>
                                        <td>
                                            @if ($property->is_active == 1)
                                                Active
                                            @else
                                                Not Active
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-rounded  btn-outline-info"> 
                                                <i class="mdi mdi-pencil-box"></i> 
                                                View details
                                            </button>
                                        </td>
                                                                               
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
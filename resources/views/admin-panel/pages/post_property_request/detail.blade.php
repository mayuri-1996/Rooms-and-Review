@extends('admin-panel.layout.base')
@section('title','| Post Property Request User Details')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Post Property Request Details</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Post Property Request</li>
            {{-- <li class="breadcrumb-item active">Lists All Users</li> --}}
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
                    <h4 class="m-b-0 text-white col-md-6">Post Property Request Details</h4>
                </div>

                <div class="card-body">
                    <form>
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-right">Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="user_email" 
                                            value="{{$details->post_property_requests_to_buyers->name}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-right">Email</label>
                                        <div class="">
                                            <input type="text" class="form-control"
                                            value="{{$details->post_property_requests_to_buyers->email}}" id="user_email" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-right">Phone</label>
                                        <div class="">
                                            <input type="text" class="form-control"
                                            value="{{$details->post_property_requests_to_buyers->phone}}" id="user_phone" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-right">Alternative Phone No.</label>
                                        <div class="">
                                            <input type="text" class="form-control" 
                                            value="{{$details->alt_phone}}" id="user_phone" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-right">Country</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="user_email" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-right">State</label>
                                        <div class="">
                                            <input type="text" class="form-control"
                                            value="{{$details->post_property_requests_to_zone_cities->zone_cities_to_zones->zone_name}}" id="user_email" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-right">City</label>
                                        <div class="">
                                            <input type="text" class="form-control" 
                                            value="{{$details->post_property_requests_to_zone_cities->city_name}}"
                                            id="user_phone" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-right">Land Mark</label>
                                        <div class="">
                                            <input type="text" value="{{$details->land_mark}}" class="form-control" id="user_email" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="align-content: center">                               
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label text-right">Address</label>
                                        <div class="">
                                            <textarea class="form-control" rows="5" readonly>{{$details->address}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="align-content: center">                               
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-left col-md-4">Front Image</label>
                                        <div class="col-md-8">
                                            <img src="{{asset('uplaods/front_image/'.$details->front_image)}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="align-content: center">                               
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-left col-md-4">Room Image</label>
                                        <div class="col-md-8">
                                            <img src="{{asset('uplaods/room_image/'.$details->room_image)}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="align-content: center">                               
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-left col-md-4">Room Video</label>
                                        <div class="col-md-8">
                                            <video width="100%" height="100%" controls>
                                                <source src="{{asset('uplaods/videos/'.$details->room_video)}}" type="video/mp4">
                                                <source src="{{asset('uplaods/videos/'.$details->room_video)}}" type="video/ogg">
                                              Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-right">
                                <div class="col-md-12">
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary" data-toggle="modal" data-target="#responsive-modal">Approve</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-danger">Back</button>
                                </div>                              
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Are you sure to approve this property?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body text-center mt-3 mb-3">
                <form>
                    <input type="hidden" id="request_id" value="{{Request::get('detailed_data')}}" name="request_id">
                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-danger mr-2" data-dismiss="modal" aria-hidden="true">No</button>
                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-info ml-2">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
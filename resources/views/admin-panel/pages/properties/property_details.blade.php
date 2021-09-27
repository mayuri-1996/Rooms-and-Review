@extends('admin-panel.layout.base')
@section('title','| Add New Property')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Add Property</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Property</li>
            <li class="breadcrumb-item active">Add Property</li>
        </ol>
    </div>  
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Add New Property</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <h3 class="box-title">Owner Information</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-4">
                                            Owner Name
                                        </label>                                       
                                        <div class="col-md-8">
                                            <input type="hidden" class="form-control" name="owner_id" value="{{$property->properties_to_buyers->id}}" readonly>
                                            <input type="text" class="form-control" value="{{$property->properties_to_buyers->name}}" readonly>
                                            {{-- <select class="form-control custom-select select2 owner_id"  name="owner_id">
                                                <option value="">Select owner</option>
                                                @foreach ($users as $user)
                                                    <option value="{{$user->id}}"
                                                        @if ($property->user_id === $user->id)
                                                            selected
                                                        @endif
                                                    >
                                                    {{$user->post_property_requests_to_buyers->name}}</option>
                                                @endforeach
                                            </select> --}}
                                         </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label text-right">Email</label>
                                        <div class="">
                                            <input type="text" class="form-control" value="{{$property->properties_to_buyers->email}}" id="user_email" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label text-right">Phone</label>
                                        <div class="">
                                            <input type="text" class="form-control" value="{{$property->properties_to_buyers->phone}}" id="user_phone" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div id="show_div">

                                <h3 class="box-title">Property Information</h3>
                                <hr class="m-t-0 m-b-40">
                                <!--/row-->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Property Title</label>
                                            <div class="">
                                                <input type="text" class="form-control property_title" value="{{$property->property_title}}" name="property_title">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <select class="form-control custom-select select2 property_status" name="property_status">
                                                <option value="">Select status</option>
                                                <option value="For Rent" selected>For Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label text-right">Property Type</label>
                                            <select class="form-control custom-select select2" name="propert_type">
                                                <option value="">Select property type</option>
                                                @foreach ($types as $type)                                                   
                                                    <option value="{{$type->id}}" 
                                                        {{$property->property_type_id == $type->id ? 'selected' : ''}}
                                                    >{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Price</label>
                                            <div class="">
                                                <input type="text" class="form-control" value="{{$property->property_price}}" name="propety_price">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Area</label>
                                            {{-- <div class="">
                                                <input type="text" class="form-control" name="property_area" disabled>
                                            </div> --}}
                                            <div class="row">
                                                @php
                                                    $full_area = explode(' ', $property->property_area);
                                                @endphp
                                                <div class="col-md-7">
                                                    <input type="number" class="form-control" value="{{$full_area[0]}}" name="property_area">
                                                </div>
                                                <div class="col-md-5" style="padding-left: 0;">
                                                    <select class="form-control custom-select" name="property_area_measure">
                                                        <option value="sq.ft"
                                                            {{$full_area[1] == 'sq.ft' ? 'selected' : ''}}
                                                        >sq.ft</option>
                                                        {{-- <option value="year">year</option> --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Bedrooms</label>
                                            <input type="number" class="form-control" value="{{$property->no_of_bedrooms}}" name="no_of_bedrooms">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label text-right">Bathrooms</label>
                                            <input type="number" class="form-control" value="{{$property->no_of_bathrooms}}" name="no_of_bathrooms">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Building Age</label>
                                            <div class="row">
                                                @php
                                                    $full_age = explode(' ', $property->building_age)
                                                @endphp
                                                <div class="col-md-7">
                                                    <input type="number" class="form-control" value="{{$full_age[0]}}" name="building_age">
                                                </div>
                                                <div class="col-md-5" style="padding-left: 0;">
                                                    <select class="form-control custom-select" name="building_age_status">
                                                        <option value="month"
                                                            {{$full_age[1] == 'month' ? 'selected' : ''}}
                                                        >month</option>
                                                        <option value="year"
                                                            {{$full_age[1] == 'year' ? 'selected' : ''}}
                                                        >year</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label text-right">Garage</label>
                                            <input type="number" class="form-control" name="no_of_garage">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="control-label text-right">Rooms</label>
                                            <input type="number" class="form-control" name="no_of_rooms" disabled>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Other Features</label>
                                            <div class="row">                                           
                                                @foreach ($others_feachures as $key=>$others_feachure)
                                                    @foreach ($property->properties_to_property_to_other_features as $feachure)
                                                        <div class="checkbox checkbox-success col-md-4">
                                                            <input id="checkbox{{$key}}" type="checkbox"
                                                                {{ $feachure->other_feature_id == $others_feachure->id ? 'checked' : '' }}
                                                                name="other_feachure[]" value="{{$others_feachure->id}}"
                                                            >
                                                            <label for="checkbox{{$key}}">{{$others_feachure->name}}</label>
                                                        </div>
                                                    @endforeach                                          
                                                @endforeach                                          
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Detailed Information</label>
                                            <div class="">
                                                <textarea class="form-control" rows="5" name="property_desc">{{$property->detailed_info}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                

                                <h3 class="box-title">Address</h3>
                                <hr class="m-t-0 m-b-40" style="margin-bottom: 20px;">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Country</label>
                                            <div class="">
                                                <select class="form-control custom-select select2 country" id="country" name="property_country">
                                                    <option value="">Select country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{$country->id}}" selected>{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            <div class="select_div">
                                                <select class="form-control custom-select appendstate" id="state" name="property_state">
                                                    <option value="">Select state</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <div class="">
                                                <select class="form-control custom-select select2 append_city" id="append_city" name="property_city">
                                                    <option value="">Select city</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Zip Code</label>
                                            <div class="">
                                                <input type="text" class="form-control" 
                                                value="{{$property->properties_to_property_addresses->pincode}}" name="property_zipcode">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <div class="row" style="align-items: center;">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Landmark</label>
                                            <div class="">
                                                <input type="text" class="form-control" 
                                                value="{{$property->properties_to_property_addresses->land_mark}}"
                                                name="property_land_mark">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <div class="">
                                                <textarea class="form-control" rows="5" name="property_address">
                                                    {{$property->properties_to_property_addresses->street_name}}
                                                </textarea>
                                                {{-- <input type="text" class="form-control" name="property_address"> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    
                                    <!--/span-->
                                </div>
                            
                                <hr>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    <button type="reset" class="btn btn-inverse">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .select2-container {
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        position: relative;
        vertical-align: middle;
        width: 100% !important;
    }
</style>
<script src="{{asset('adminPanel/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminPanel/assets/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script>
    $('document').ready(function(){
        var country_id = $('.country').val();
        var property_state = '{{$property->properties_to_property_addresses->state}}';
        var property_city = '{{$property->properties_to_property_addresses->city}}';
        console.log(property_state)
        $('.appendstate').val(1);
        $.ajax({
            url: "{{route('admin.get.states')}}",
            type: 'get',
            dataType: 'json',
            data: {country_id: country_id},
            success: function(res){
                res.forEach(element => {
                    
                    if(element.id == property_state){
                        var states = `<option value="`+element.id+`" selected>`+element.zone_name+`</option>`
                    }else{
                        var states = `<option value="`+element.id+`">`+element.zone_name+`</option>`
                    }
                    
                    $('#state').append(states)
                });
                
            }
        });
        
        $.ajax({
            url: "{{route('admin.get.cities')}}",
            type: 'get',
            dataType: 'json',
            data: {state_id: property_state},
            success: function(res){
                console.log(res)
                res.forEach(element => {
                    if(property_city == element.id){
                        var city = `<option value="`+element.id+`" selected>`+element.city_name+`</option>`
                    }else{
                        var city = `<option value="`+element.id+`">`+element.city_name+`</option>`
                    }                   
                    $('#append_city').append(city);
                })
            }
        });
    })
    var count = 0;
    $("#add_image").on('click',function(){
        // alert('ok')
        // var append_div = '<div class="col-md-6"><input type="file" id="input-file-now" class="dropifyg" /> <img src="#" class="this_img" id="category-img-tag" width="200px" /></div>';
        count = count + 1;
        // alert(count)
        var append_div = `<div class="row closest_row_`+count+`" id="row_id_`+count+`" style="margin-bottom: 10px">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-image"></i></div>
                                    <input type="file" class="form-control" name="image[]" id="pwd1">
                                </div>
                            </div>
                            <div class="col-md-6 text-left">
                                <button type="button" id="delete_image" onclick="deleteThis(`+count+`)" class="btn btn-danger btn-circle delete"><i class="fa fa-trash-o"></i> </button>
                            </div>                                             
                        </div>`
        $('.append').append(append_div);
    });

    $('#add_video').on('click', function(){
        count = count + 1;
        var append_div = `<div class="row closest_row_`+count+`" id="video_row_id_`+count+`" style="margin-bottom: 10px">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-image"></i></div>
                                    <input type="file" name="video[]" class="form-control" id="video">
                                </div>
                            </div>
                            <div class="col-md-6 text-left">
                                <button type="button" id="delete_video" onclick="deleteThisVideo(`+count+`)" class="btn btn-danger btn-circle delete"><i class="fa fa-trash-o"></i> </button>
                            </div>                                             
                        </div>`
        $('.video_append').append(append_div);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#category-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#input-file-now").change(function(){
        readURL(this);
    });

    function deleteThis(id){
        var element = document.getElementById("row_id_"+id);
        element.parentNode.removeChild(element);
    }

    function deleteThisVideo(id){
        var element = document.getElementById("video_row_id_"+id);
        element.parentNode.removeChild(element);
    }

    $(".select2").select2();

    
    $('.country').select2({}).on("select2:select", function (e) {
        var country_id = $(this).val();
        $.ajax({
            url: "{{route('admin.get.states')}}",
            type: 'get',
            dataType: 'json',
            data: {country_id: country_id},
            success: function(res){
                console.log(res)
                res.forEach(element => {
                    var states = `<option value="`+element.id+`">`+element.zone_name+`</option>`
                    $('#state').append(states)
                });
                
            }
        })
    });


    $('.appendstate').select2({}).on("select2:select", function(e){
        var state_id = $(this).val();
        $.ajax({
            url: "{{route('admin.get.cities')}}",
            type: 'get',
            dataType: 'json',
            data: {state_id: state_id},
            success: function(res){
                console.log(res)
                res.forEach(element => {
                    var city = `<option value="`+element.id+`">`+element.city_name+`</option>`
                    $('#append_city').append(city);
                })
            }
        });
    });


    
</script>  



@endsection
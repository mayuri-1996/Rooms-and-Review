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
                    <form action="{{route('admin.post.property')}}" method="POST" enctype="multipart/form-data">
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
                                            <select class="form-control custom-select select2 owner_id"  name="owner_id">
                                                <option value="">Select owner</option>
                                                @foreach ($users as $user)
                                                    <option value="{{$user->id}}">{{$user->post_property_requests_to_buyers->name}}</option>
                                                @endforeach
                                            </select>
                                         </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label text-right">Email</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="user_email" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label text-right">Phone</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="user_phone" readonly>
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
                                                <input type="text" class="form-control property_title" name="property_title" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <select class="form-control custom-select select2 property_status" name="property_status" disabled>
                                                <option value="">Select status</option>
                                                <option value="For Rent">For Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label text-right">Property Type</label>
                                            <select class="form-control custom-select select2" name="propert_type" disabled>
                                                <option value="">Select property type</option>
                                                @foreach ($types as $type)
                                                    <option value="{{$type->id}}">{{$type->name}}</option>
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
                                                <input type="text" class="form-control" name="propety_price" disabled>
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
                                                <div class="col-md-7">
                                                    <input type="number" class="form-control" name="property_area" disabled>
                                                </div>
                                                <div class="col-md-5" style="padding-left: 0;">
                                                    <select class="form-control custom-select" name="property_area_measure" disabled>
                                                        <option value="sq.ft">sq.ft</option>
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
                                            <input type="number" class="form-control" name="no_of_bedrooms" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label text-right">Bathrooms</label>
                                            <input type="number" class="form-control" name="no_of_bathrooms" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Building Age</label>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <input type="number" class="form-control" name="building_age" disabled>
                                                </div>
                                                <div class="col-md-5" style="padding-left: 0;">
                                                    <select class="form-control custom-select" name="building_age_status" disabled>
                                                        <option value="month">month</option>
                                                        <option value="year">year</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label text-right">Garage</label>
                                            <input type="number" class="form-control" name="no_of_garage" disabled>
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
                                                    <div class="checkbox checkbox-success col-md-4">
                                                        <input id="checkbox{{$key}}" type="checkbox" name="other_feachure[]" disabled value="{{$others_feachure->id}}">
                                                        <label for="checkbox{{$key}}">{{$others_feachure->name}}</label>
                                                    </div>
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
                                                <textarea class="form-control" rows="5" name="property_desc" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="box-title">Gallery</h3>
                                <hr class="m-t-0 m-b-40" style="margin-bottom: 20px;">

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row" style="margin-bottom: .5rem;">
                                                    <div class="col-md-6">
                                                        <label for="input-file-now">Upload Image</label>
                                                    </div>
                                                    <div class="col-md-6 text-right ">
                                                        <button type="button" id="add_image" disabled class="btn btn-primary btn-circle"><i class="fa fa-plus"></i> </button>
                                                        {{-- <button type="button" id="delete_image" onclick="deleteThis()" class="btn btn-danger btn-circle delete"><i class="fa fa-trash-o"></i> </button> --}}
                                                    </div>
                                                </div>
                                                <div class="append">
                                                    <div class="row" style="margin-bottom: 10px">
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-image"></i></div>
                                                                <input type="file" class="form-control" name="image[]" disabled id="pwd1">
                                                            </div>
                                                        </div>
                                                                                                
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="box-title">Video</h3>
                                <hr class="m-t-0 m-b-40" style="margin-bottom: 20px;">

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row" style="margin-bottom: .5rem;">
                                                    <div class="col-md-6">
                                                        <label for="input-file-now">Upload Video</label>
                                                    </div>
                                                    <div class="col-md-6 text-right ">
                                                        <button type="button" disabled id="add_video" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i> </button>
                                                        {{-- <button type="button" id="delete_image" onclick="deleteThis()" class="btn btn-danger btn-circle delete"><i class="fa fa-trash-o"></i> </button> --}}
                                                    </div>
                                                </div>
                                                <div class="video_append">
                                                    <div class="row" style="margin-bottom: 10px">
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-image"></i></div>
                                                                <input type="file" class="form-control" name="video[]" disabled id="video">
                                                            </div>
                                                        </div>
                                                                                                
                                                    </div>
                                                </div>
                                                
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
                                                <select class="form-control custom-select select2 country" disabled id="country" name="property_country">
                                                    <option value="">Select country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            <div class="">
                                                <select class="form-control custom-select select2 appendstate" disabled id="state" name="property_state">
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
                                                <select class="form-control custom-select select2 append_city" disabled id="append_city" name="property_city">
                                                    <option value="">Select city</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Zip Code</label>
                                            <div class="">
                                                <input type="text" class="form-control" disabled name="property_zipcode">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <div class="row" style="align-items: center;">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Landmark</label>
                                            <div class="">
                                                <input type="text" class="form-control" disabled name="property_land_mark">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <div class="">
                                                <textarea class="form-control" rows="5" disabled name="property_address"></textarea>
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
<script src="{{asset('adminPanel/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminPanel/assets/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script>
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

    $('.owner_id').select2({}).on("select2:select", function (e) {
        console.log($(this).val())
        var data = e.params.data;       
        var user_id = $(this).val();
        console.log(user_id);
        $.ajax({
            url: "{{route('admin.get.user')}}",
            type: 'get',
            dataType: 'json',
            data: {id: user_id},
            success: function(res){
                console.log(res)
                $('#user_email').val(res.email);
                $('#user_phone').val(res.phone);
                $('input').removeAttr('disabled');
                $('select').removeAttr('disabled');
                $('textarea').removeAttr('disabled');
                $('button').removeAttr('disabled');
            }
        });
    });
    
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

    

    // $('#country').on('change', function(){
    //     var country_id = $(this).val();
    //     $.ajax({
    //         url: "{{route('admin.get.states')}}",
    //         type: 'get',
    //         dataType: 'json',
    //         data: {country_id: country_id},
    //         success: function(res){
    //             console.log(res)
    //             res.forEach(element => {
    //                 var states = `<option value="`+element.id+`">`+element.zone_name+`</option>`
    //                 $('#state').append(states)
    //             });
                
    //         }
    //     })
    // });

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
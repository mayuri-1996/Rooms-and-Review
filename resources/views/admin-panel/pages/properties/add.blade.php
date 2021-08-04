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
                    <form action="{{route('admin.post.property')}}" method="POST">
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
                                            <select class="form-control custom-select select2" name="owner_id">
                                                <option value="">Select owner</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
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
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label text-right">Phone</label>
                                        <div class="">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <h3 class="box-title">Property Information</h3>
                            <hr class="m-t-0 m-b-40">
                            <!--/row-->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Property Title</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="property_title">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <select class="form-control custom-select select2" name="property_status">
                                            <option value="">Select status</option>
                                            <option value="For Rent">For Rent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="control-label text-right">Property Type</label>
                                        <select class="form-control custom-select select2" name="propert_type">
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
                                            <input type="text" class="form-control" name="propety_price">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Area</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="property_area">
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
                                        <input type="number" class="form-control" name="no_of_bedrooms">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="control-label text-right">Bathrooms</label>
                                        <input type="number" class="form-control" name="no_of_bathrooms">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">State</label>
                                        <div class="">
                                            <select class="form-control custom-select select2" name="property_state">
                                                <option value="">Select state</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">City</label>
                                        <div class="">
                                            <select class="form-control custom-select select2 append_city" name="property_city">
                                                <option value="">Select state</option>
                                            </select>
                                            <input type="text" class="form-control" name="property_city">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="property_address">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Zip Code</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="property_zipcode">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Detailed Information</label>
                                        <div class="">
                                            <textarea class="form-control" rows="5" name="property_desc"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Building Age</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input type="number" class="form-control" name="building_age">
                                            </div>
                                            <div class="col-md-5" style="padding-left: 0;">
                                                <select class="form-control custom-select" name="building_age-status">
                                                    <option value="month">month</option>
                                                    <option value="year">year</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label text-right">Garage</label>
                                        <input type="number" class="form-control" name="no_of_garage">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label text-right">Rooms</label>
                                        <input type="number" class="form-control" name="no_of_rooms">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Other Features</label>
                                        <div class="row">                                           
                                            @foreach ($others_feachures as $key=>$others_feachure)
                                                <div class="checkbox checkbox-success col-md-4">
                                                    <input id="checkbox{{$key}}" type="checkbox" name="other_feachure[]" value="{{$others_feachure->id}}">
                                                    <label for="checkbox{{$key}}">{{$others_feachure->name}}</label>
                                                </div>
                                            @endforeach                                          
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
                                                    <button type="button" id="add_image" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i> </button>
                                                    {{-- <button type="button" id="delete_image" onclick="deleteThis()" class="btn btn-danger btn-circle delete"><i class="fa fa-trash-o"></i> </button> --}}
                                                </div>
                                            </div>
                                            <div class="append">
                                                <div class="row" style="margin-bottom: 10px">
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-image"></i></div>
                                                            <input type="file" class="form-control" id="pwd1" placeholder="Enter email">
                                                        </div>
                                                    </div>
                                                                                               
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('adminPanel/assets/plugins/jquery/jquery.min.js')}}"></script>
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
                                    <input type="file" class="form-control" id="pwd1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6 text-left">
                                <button type="button" id="delete_image" onclick="deleteThis(`+count+`)" class="btn btn-danger btn-circle delete"><i class="fa fa-trash-o"></i> </button>
                            </div>                                             
                        </div>`
        $('.append').append(append_div);
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

    
</script>  


@endsection
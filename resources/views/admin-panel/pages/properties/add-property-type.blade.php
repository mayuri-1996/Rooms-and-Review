@extends('admin-panel.layout.base')
@section('title','| Add Other Feachures')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">propert Type</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Property</li>
            <li class="breadcrumb-item active">Add Property Type</li>
        </ol>
    </div>  
</div>

<div class="container-fluid">
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Add New Property Type</h4>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">{{$errors->first()}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                        </div>
                    @endif

                    <form action="{{route('admin.post.propertytype')}}" method="post">
                        @csrf
                        <div id="name_div">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label class="control-label text-right">Name</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="name[]" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="button" id="add_row" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i> </button>
                                    </div>
                                </div>
                                <!--/span-->
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
    var count = 0 ;
    $("#add_row").on('click',function(){
        count = count + 1;
        var append_div = `<div class="row" id="div_row_`+count+`">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="name[]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" id="delete_row" onclick="deleteRow(`+count+`)" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i> </button>
                                </div>
                            </div>
                            <!--/span-->
                        </div>`;
        $("#name_div").append(append_div);
    });

    function deleteRow(id){
        var element = document.getElementById('div_row_'+id);
        element.parentNode.removeChild(element);
    }
</script>

@endsection
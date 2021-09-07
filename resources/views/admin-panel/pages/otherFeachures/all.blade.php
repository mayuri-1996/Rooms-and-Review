@extends('admin-panel.layout.base')
@section('title','| All Property List')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Other Feachures Lists</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Feachures</li>
            <li class="breadcrumb-item active">Other Feachures</li>
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
                    <h4 class="m-b-0 text-white col-md-6">All OtherFeachures Lists</h4>
                    <div class="col-md-6 text-right">
                        <a href="{{route('admin.add.otherfeachure')}}">
                            <button type="button" class="btn btn-danger"><i class="fa fa-plus"></i> Add OtherFeachures</button>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl no</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feachures as $key=>$feachure)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$feachure->name}}</td>
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
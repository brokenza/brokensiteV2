@extends('layouts/full_template')

@section('content')

<h3>User Create</h3>
<div>
        <a href="./"  class="btn btn-yellow m-b-5 m-r-3"><i class="fa fa-arrow-alt-circle-left"></i> Back</a>
</div>

<div class="row">
    <!-- BEGIN col-4 -->
    <div class="col-lg-12">
        <!-- BEGIN card -->
        <div class="card m-b-15">
                <form action="register" method="post">
            <!-- BEGIN card-header -->
            <div class="card-header card-header-inverse">
                <h4 class="card-header-title">Form Input data user</h4> 
                <div class="card-header-btn">
                    <a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
                    <a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
                    <a href="#" data-toggle="card-remove" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                </div>
            </div>
            <!-- END card-header -->
            <!-- BEGIN card-body -->
            <div class="card-body">
                <div class="row row-space-20">
                    <!-- BEGIN col-6 -->
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="" />
                        </div>
                        <div class="form-group">
                            <label>First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="" />
                        </div>
                    </div>
                    <!-- END col-6 -->
                    <!-- BEGIN col-6 -->
                    <div class="col-md-4">
                        <div class="form-group">
                                <label>Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" value="" />
                        </div>
                        <div class="form-group">
                                <label>Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="" />
                        </div>
                    </div>
                    <!-- END col-6 -->
                </div> 
            </div>
            <div class="card-footer clearfix">
                <span class="text-muted">Last saved on 13 Jan 2019</span>
                <button type="submit" class="btn btn-default  ml-auto"><i class="fa fa-trash-alt"></i> Cancel</button>
                <button type="submit" class="btn btn-primary  m-l-5"><i class="fa fa-check"></i> Save</button>

            </div>
            <!-- END card-body -->
                </form>
        </div>
    </div>
    <!-- END col-4 -->
    <!-- BEGIN col-4 -->
</div>




@endsection
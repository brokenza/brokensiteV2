@extends('layouts/full_template')

@section('content')


<h3>User Management</h3>
<div>
        <a href="./users/create"  class="btn btn-success m-b-5 m-r-3"><i class="fa fa-user-plus"></i> Add New</a>
</div>
<div class="card ">
    <!-- BEGIN card-header -->
    <div class="card-header card-header-inverse">
        <h4 class="card-header-title">
            List data users
        </h4>
        <div class="card-header-btn">
            <a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
            <a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
            <a href="#" data-toggle="card-remove" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
        </div>
    </div>
    <!-- END card-header -->
    <div class="card-body">
        <!-- BEGIN table -->
        <table id="datatables-default" class="table table-striped table-td-valign-middle table-bordered bg-white">
            <thead>
                <tr>
                    <th width="1%" class="no-sort">#</th>
                    <th width="10%">FULL NAME</th>
                    <th width="20%">USERNAME</th>
                    <th width="10%">EMAIL</th>
                    <th width="10%">ROLE</th>
                    <th width="1%" class="no-sort">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$user)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td class="btn-col text-nowrap" width="1%">
                        <a href="#" class="btn btn-silver btn-xs m-r-2"><i class="fa fa-user"></i></a>
                        <a href="#" class="btn btn-silver btn-xs m-r-2"><i class="fa fa-cog"></i></a>
                        <a href="#" class="btn btn-silver btn-xs"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach             
            </tbody>
        </table>
        <!-- END table -->
    </div>
</div>
@endsection


@section('page-js-files')
<script src="{{ asset("/assets/js/app.min.js") }}"></script>
@stop

@section('page-js-script')
<script type="text/javascript">
/*     $(document).ready(function() {
        $.notification({
                    title: "Delete",
                    content: "บันทึกข้อมูลผู้ใช้สำเร็จ",
                    autoclose :true,
                    autocloseTime: 3000,
                    icon: "fa-exclamation text-white",
                    iconClass:"bg-warning",
                });
    }); */
</script>
@stop


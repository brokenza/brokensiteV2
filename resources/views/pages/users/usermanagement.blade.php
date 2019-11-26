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
<<<<<<< HEAD


        <table style="width:100%">
            <tbody>
                <tr>
                    <td class="p-b-10">1. Default Notification</td>
                    <td style="width:1%" class="p-r-10 p-b-10">
                        <a href="#" class="btn btn-indigo btn-sm"
                            data-toggle="notification" 
                            data-title="Reminder" 
                            data-content="Meeting with Terry"
                            data-icon="fa fa-clock text-white" 
                            data-icon-class="bg-gradient-indigo"
                            data-btn="true"
                            data-btn-text="Details"
                            data-btn-attr="data-click='trigger-details'">Demo</a>
                    </td>
                    <td class="p-l-5 p-b-10">4. Inverse Style Notification</td>
                    <td class="p-b-10">
                        <a href="#" class="btn btn-black btn-sm"
                            data-toggle="notification" 
                            data-inverse-mode="true"
                            data-title="Mobile App Branch" 
                            data-content="New commit found from development branches."
                            data-icon="fab fa-github" 
                            data-icon-class="bg-white"
                            data-btn="true"
                            data-btn-text="Pull"
                            data-btn-attr="data-click='trigger-pull'">Demo</a>
                    </td>
                </tr>
                <tr>
                    <td class="p-b-10">2. Notification with Image</td>
                    <td class="p-b-10 p-r-10">
                        <a href="#" class="btn btn-default btn-sm"
                            data-toggle="notification" 
                            data-title="Corey" 
                            data-content="There's so much room for activities!"
                            data-img="assets/img/user.jpg" 
                            data-btn="true"
                            data-btn-text="View"
                            data-btn-url="https://seantheme.com/">Demo</a>
                    </td>
                    <td class="p-b-10 p-l-5">5. Without Icon</td>
                    <td class="p-b-10">
                        <a href="#" class="btn btn-default btn-sm"
                            data-toggle="notification" 
                            data-title="Calendar" 
                            data-content="Tom's Birthday"
                            data-btn="true"
                            data-btn-text="View"
                            data-btn-url="calendar.html">Demo</a>
                    </td>
                </tr>
                <tr>
                    <td class="p-b-0">3. Custom Button url</td>
                    <td class="p-b-0 p-r-10">
                        <a href="#" class="btn btn-danger btn-sm"
                            data-toggle="notification" 
                            data-icon="fab fa-times-circle text-white"
                            data-icon-class="bg-danger"
                            data-title="New Update" 
                            data-btn="true"
                            data-btn-text="Go"
                            data-btn-url="http://www.google.com/"
                            data-content="Gmail has launched a new app">Demo</a>
                    </td>
                    <td class="p-b-0 p-l-5">6. Single Button</td>
                    <td class="p-b-0">
                        <a href="#" class="btn btn-success btn-sm"
                            data-toggle="notification" 
                            data-icon="fa fa-check-circle text-white"
                            data-icon-class="bg-success"
                            data-title="Success" 
                            data-autoclose="true"
                            data-autoclose-time="3000"
                            data-content="บันทึกข้อมูลผู้ใช้สำเร็จ">Demo</a>
                    </td>
                    <td class="p-b-0">
                        <a href="#" class="btn btn-danger btn-sm"
                            data-toggle="notification" 
                            data-icon="fa fa-times-circle text-white"
                            data-icon-class="bg-danger"
                            data-title="Error" 
                            data-autoclose="true"
                            data-autoclose-time="3000"
                            data-content="บันทึกข้อมูลผู้ใช้สำเร็จ">Demo</a>
                    </td>
                    <td class="p-b-0">
                        <a href="#" class="btn btn-warning btn-sm"
                            data-toggle="notification" 
                            data-icon="fa fa-exclamation text-white"
                            data-icon-class="bg-warning"
                            data-title="Warning" 
                            data-autoclose="true"
                            data-autoclose-time="3000"
                            data-content="บันทึกข้อมูลผู้ใช้สำเร็จ">Demo</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <button onclick="myFunction()">Copy Text</button>
        <button  class="btn btn-silver btn-xs" onclick="myFunction()"><i class="fa fa-times"></i></button>
    </div>
</div>
@endsection
@section('javascript')
    
    <script src="{{ asset("/assets/js/notification/noti.js") }}"></script>
@stop
=======
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

>>>>>>> b1e4bb7dc5391309e6923fcadaa7e509c99b89ec

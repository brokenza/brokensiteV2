@extends('layouts/full_template')

@section('content')

<h3>User Create</h3>
<div>
    <a href="./" class="btn btn-yellow m-b-5 m-r-3"><i class="fa fa-arrow-alt-circle-left"></i> Back</a>
</div>

<div class="row">
    <!-- BEGIN col-4 -->
    <div class="col-lg-12">
        <!-- BEGIN card -->
        <div class="card m-b-15">
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
                <form id="form_users" method="post">
                {{csrf_field()}}
                    <div class="row row-space-20">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Username <span class="text-danger"></span></label>
                                <input type="text" name="username" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <label>First Name <span class="text-danger"></span></label>
                                <input type="text" name="first_name" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Password <span class="text-danger"></span></label>
                                <input type="password" name="password" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <label>Last Name <span class="text-danger"></span></label>
                                <input type="text" name="last_name" class="form-control" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="row row-space-20">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>email <span class="text-danger"></span></label>
                                <input type="email" name="email" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>role <span class="text-danger"></span></label>
                                <select name="role" class="form-control">
                                    <option value="0">--select--</option>
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Super Admin">Super Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class="card-footer clearfix">
                  <!--   <span class="text-muted">Last saved on 13 Jan 2019</span> -->
                    <button type="reset" class="btn btn-default  ml-auto btn-reset"><i class="fa fa-trash-alt"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary  m-l-5 btn-submit"><i class="fa fa-check"></i> Save</button>

                </div>
        </div>
  
    </div>
    <!-- END col-4 -->
    <!-- BEGIN col-4 -->
</div>
@endsection
@section('page-js-files')
<script src="{{ asset("/assets/js/app.min.js") }}"></script>
@stop

@section('page-js-script')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-reset").click(function(e) {
        e.preventDefault();
        document.getElementById("form_users").reset(); 
    });
    $(".btn-submit").click(function(e) {
        console.log('click');
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "{{ route('users.store') }}",
            dataType: 'JSON',
            data: $('#form_users').serialize(),
            /*  data:{name:name, password:password, email:email}, */
            success: function(data) {
                //message alert
                console.log(data);
                $.notification({
                    title: "Success",
                    content: "บันทึกข้อมูลผู้ใช้สำเร็จ",
                    autoclose: true,
                    autocloseTime: 2000,
                    icon: "fa fa-check text-white",
                    iconClass: "bg-success",
                });
                //reset form
                document.getElementById("form_users").reset(); 
/*                 setTimeout(() => {
                    window.location.replace('./');
                }, 2000); */
                
            }
        });
    });
</script>
@stop
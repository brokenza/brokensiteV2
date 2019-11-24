@extends('layouts/login_template')

@section('content')
<div class="login">
			<!-- BEGIN login-cover -->
			<div class="login-cover"></div>
			<!-- END login-cover -->
			<!-- BEGIN login-content -->
			<div class="login-content">
				<!-- BEGIN login-brand -->
				<div class="login-brand">
					<a href="#"><b>Ad</b>metro</a>
				</div>
				<!-- END login-brand -->
				<h3 class="m-b-20"><span>Sign In</span></h3>
				<!-- BEGIN login-desc -->
				<div class="login-desc m-b-30">
					For your protection, please verify your identity.
				</div>
				<!-- END login-desc -->
				<!-- BEGIN login-form -->
				<form action="https://seantheme.com/admetro/index.html" method="POST" name="login_form">
					<div class="form-group">
						<label>Username <span class="text-danger">*</span></label>
						<input type="text" class="form-control" value="" />
					</div>
					<div class="form-group">
						<label>Password <span class="text-danger">*</span></label>
						<input type="password" class="form-control" value="" />
					</div>
					<div class="m-b-30">
						<div class="checkbox-inline">
							<input type="checkbox" id="login-remember-me" value="2"> <label for="login-remember-me">Remember me</label>
						</div>
					</div>
					<div class="d-flex align-items-center">
						<button type="submit" class="btn btn-primary width-150 btn-rounded">Sign In</button>
						<a href="#" class="m-l-10">Forgot password?</a>
					</div>
				</form>
				<!-- END login-form -->
				<div class="login-desc m-t-30">
					Not a member yet? Register <a href="page_register.html">Here</a>.
				</div>
			</div>
			<!-- END login-content -->
		</div>
@endsection
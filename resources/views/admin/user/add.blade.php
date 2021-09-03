@extends('layouts/admin')
@section('link_css')
<!-- Favicon icon -->
<link rel="icon" href="{{ asset('images/favicon.ico') }} " type="image/x-icon">
<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
<!-- themify-icons line icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('icon/themify-icons/themify-icons.css') }} ">
<!-- ico font -->
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('icon/icofont/css/icofont.css') }} "> --}}
<!-- feather Awesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('icon/feather/css/feather.css') }}">
<!-- Syntax highlighter Prism css -->
<link rel="stylesheet" type="text/css" href="{{ asset('pages/prism/prism.css') }} ">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css') }} ">
@endsection
@section('content')
<div class="pcoded-inner-content">
	<!-- Main-body start -->
	<div class="main-body">
		<div class="page-wrapper">
			<!-- Page-header start -->
			<div class="page-header">
				<div class="row align-items-end">
					<div class="col-lg-8">
						<div class="page-header-title">
							<div class="d-inline">
								<h4>ADD USER</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="page-header-breadcrumb">
							<ul class="breadcrumb-title">
								<li class="breadcrumb-item"><a href="#!">Dashboard</a>
								</li>
								<li class="breadcrumb-item"><a href="#!">Add user</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Page-header end -->

			<!-- Page body start -->
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<!-- Basic Inputs Validation start -->
						<div class="card">
							<div class="card-header">
								<h5>Add new user</h5>
								<span>Please fill all field have <code>(*)</code></span>

							</div>
							<div class="card-block">
								<form id="form-add-user" method="post" action="/" novalidate="">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Full name <span class="text-danger" style="font-size:12px">(*)</span></label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="name" id="name" placeholder="Fullname input">
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Password <span class="text-danger" style="font-size:12px">(*)</span></label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="password" name="password" placeholder="Password input">
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Repeat Password <span class="text-danger" style="font-size:12px">(*)</span></label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="repeat-password" name="repeat-password" placeholder="Repeat Password">
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email <span class="text-danger" style="font-size:12px">(*)</span></label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter valid e-mail address">
											<span class="messages"></span>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-2 col-form-label">Gender</label>
										<div class="col-sm-10">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input class="form-check-input" type="radio" name="gender" id="male" value="male" checked=""> Male
												</label>
											</div>
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input class="form-check-input" type="radio" name="gender" id="female" value="female"> Female
												</label>
											</div>
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-2 col-form-label">Status</div>
										<div class="col-sm-10">
											<select name="status" id="status" class="form-control">
												<option value="active">Active</option>
												<option value="inactive">Inactive</option>
											</select>
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2">Address</label>
										<div class="col-sm-10">
											<textarea name="address" class="form-control"></textarea>
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2">Avatar</label>
										<div class="col-sm-10">
											<div class="jFiler-input">
												<div class="jFiler-input-caption">
													<span>Choose files To Upload</span>
												</div>
												<div class="jFiler-input-button">Choose Files</div></div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2"></label>
											<div class="col-sm-10">
												<button type="submit" name="add" class="btn btn-primary m-b-0">add user</button>
											</div>
										</div>

									</form>
								</div>
							</div>
							<!-- Basic Inputs Validation end -->
						</div>
					</div>
				</div>
				<!-- Page body end -->
			</div>
		</div>	
	</div>
		
	<!-- Validation js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script type="text/javascript" src="{{ asset('pages/form-validation/validate.js') }}"></script>

	<!-- i18next.min.js -->
	<script type="text/javascript" src="{{ asset('bower_components/i18next/js/i18next.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>

	{{-- validation --}}
	<script type="text/javascript" src="{{ asset('pages/form-validation/form-validation.js') }}"></script>
	@endsection
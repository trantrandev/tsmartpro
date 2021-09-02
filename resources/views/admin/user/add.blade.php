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
								<h4>Forms Validation</h4>
								<span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="page-header-breadcrumb">
							<ul class="breadcrumb-title">
								<li class="breadcrumb-item">
									<a href="index-1.htm"> <i class="feather icon-home"></i> </a>
								</li>
								<li class="breadcrumb-item"><a href="#!">Form Components</a>
								</li>
								<li class="breadcrumb-item"><a href="#!">Form Validation</a>
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
								<h5>Basic Inputs Validation</h5>
								<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>

							</div>
							<div class="card-block">
								<form id="main" method="post" action="/" novalidate="">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Simple Input</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="name" id="name" placeholder="Text Input Validation">
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="password" name="password" placeholder="Password input">
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Repeat Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="repeat-password" name="repeat-password" placeholder="Repeat Password">
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter valid e-mail address">
											<span class="messages"></span>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-2 col-form-label">Radio Buttons</label>
										<div class="col-sm-10">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input class="form-check-input" type="radio" name="gender" id="gender-1" value="option1"> Male
												</label>
											</div>
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input class="form-check-input" type="radio" name="gender" id="gender-2" value="option2"> Female
												</label>
											</div>
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2"></label>
										<div class="col-sm-10">
											<button type="submit" class="btn btn-primary m-b-0">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- Basic Inputs Validation end -->
						<!-- Tooltip Validation card start -->
						<div class="card">
							<div class="card-header">
								<h5>Tooltip Validation</h5>
								<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>

							</div>
							<div class="card-block">
								<form id="second" action="/" method="post" novalidate="">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Enter Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="usernameP" name="Username" placeholder="Enter Username">
											<span class="messages popover-valid"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Enter Email-id</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="EmailP" name="Email" placeholder="Enter email id">
											<span class="messages popover-valid"></span>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-2"></label>
										<div class="col-sm-10">
											<button type="submit" class="btn btn-primary m-b-0">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- Tooltip Validation card end -->
						<!-- Number Validation card start -->
						<div class="card">
							<div class="card-header">
								<h5>Number Validation</h5>
								<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>

							</div>
							<div class="card-block">
								<form id="number_form" action="/" method="post" novalidate="">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Integers Only</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="integer" id="integer" placeholder="Integers Only">
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Numbers Only</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="numeric" id="numeric" placeholder="Numbers Only">
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Greater number</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="Number" id="greater" placeholder="Number Greter than 50">
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Less number</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="Numbers" id="less" placeholder="Number Less than 50">
											<span class="messages"></span>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-2"></label>
										<div class="col-sm-10">
											<button type="submit" class="btn btn-primary m-b-0">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- Number Validation card end -->
						<!-- Form components Validation card start -->
						<div class="card">
							<div class="card-header">
								<h5>Form Components Validation</h5>
								<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>

							</div>
							<div class="card-block">
								<form id="checkdrop" action="/" method="post" novalidate="">
									<div class="form-group row">
										<label class="col-sm-2">Radio Buttons</label>
										<div class="col-sm-10">
											<div class="form-radio">
												<div class="radio radiofill radio-primary radio-inline">
													<label>
														<input type="radio" name="member" value="free" data-bv-field="member">
														<i class="helper"></i>Select here
													</label>
												</div>
												<div class="radio radiofill radio-primary radio-inline">
													<label>
														<input type="radio" name="member" value="personal" data-bv-field="member">
														<i class="helper"></i>Another select
													</label>
												</div>
											</div>
											<span class="messages"></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2">Select Checkbox</label>
										<div class="col-sm-10">
											<div class="checkbox-fade fade-in-primary">
												<label>
													<input type="checkbox" id="checkbox" name="Language" value="HTML">
													<span class="cr">
														<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
													</span>
													<span>HTML</span>
												</label>
											</div>
											<div class="checkbox-fade fade-in-primary">
												<label>
													<input type="checkbox" id="checkbox2" name="Language" value="CSS">
													<span class="cr">
														<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
													</span>
													<span>CSS</span>
												</label>
											</div>
											<span class="messages"></span>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-2"></label>
										<div class="col-sm-10">
											<button type="submit" class="btn btn-primary m-b-0">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- Form components Validation card end -->
					</div>
				</div>
			</div>
			<!-- Page body end -->
		</div>
	</div>
	<!-- Main-body end -->
	<div id="styleSelector">

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
@extends('layouts.admin')
@section('add_css')
<!-- themify-icons line icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('icon/themify-icons/themify-icons.css') }}">
<!-- Data Table Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"> 
<link rel="stylesheet" type="text/css" href="{{ asset('pages/data-table/css/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
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
								<h4>Users</h4>								 
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="page-header-breadcrumb">
							<ul class="breadcrumb-title">
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
								</li>
								<li class="breadcrumb-item"><a href="#!">User list</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Page-header end -->

			<!-- Page-body start -->
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>User List</h5>
								<button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Add Product
								</button>
							</div>
							<div class="card-block">
								<div class="dt-responsive table-responsive">
									<table id="simpletable" class="table table-striped table-bordered nowrap">
										<thead>
											<tr>
												<th>Name</th>
												<th>Avatar</th>
												<th>Email</th>
												<th>Created date</th>
												<th>Status</th>
												<th>Roll</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>trantrandev@gmail.com</td>
												<td>29/12/1998 12:21:12</td>
												<td>show</td>
												<td>administrator</td>
											</tr> 
										</tbody>
									</table>
								</div>
							</div>
						</div>{{-- End card --}}
					</div>
				</div>
			</div>
			<!-- Page-body end -->
		</div>
	</div>
	<!-- Main-body end -->
</div>

<!-- data-table js -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('pages/data-table/js/jszip.min.js') }}"></script>
<script src="{{ asset('pages/data-table/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('pages/data-table/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('bower_components/i18next/js/i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>

<!-- Custom js -->
<script src="{{ asset('pages/data-table/js/data-table-custom.js') }}"></script>
@endsection
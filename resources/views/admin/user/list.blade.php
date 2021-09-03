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
								<h4>USERS</h4>								 
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
								<h5>List user</h5>
								<a href="{{ url('admin/user/add') }}" type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" data-modal="modal-13"> <i class="feather icon-plus m-r-5"></i> Add User
								</a>
							</div>
							<div class="card-block pb-0">
								<div class="analytic">
									<a href="http://localhost/storeESmart/admin/user/list?status=all" class="text-primary">All<span class="text-muted"> (1) |</span></a>
									<a href="http://localhost/storeESmart/admin/user/list?status=active" class="text-primary">Active<span class="text-muted"> (1) |</span></a>
									<a href="http://localhost/storeESmart/admin/user/list?status=trash" class="text-primary">Inactive<span class="text-muted"> (2) </span></a>
								</div>
								<div class="form-action form-inline pt-3"> 
									<select class="form-control form-control-sm mr-1" name="act" id="">
										<option>Choose</option>
										<option value="delete">Temporatary delete</option>
									</select>
									<input type="submit" name="btn-search" value="Áp dụng" class="btn btn-sm btn-primary">
								</div>

							</div>
							<div class="card-block">
								<div class="dt-responsive table-responsive">
									<table id="list-user" class="table table-striped table-bordered nowrap table-checkall">
										<thead>
											<tr>
												<th><input type="checkbox" name="checkall"></th>
												<th class="text-center">Avatar</th>
												<th>Name</th>
												<th>Email</th>
												<th>Created date</th>
												<th>Status</th>
												<th>Roll</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($users as $user)
											<tr>
												<td><input type="checkbox"></td>
												<td class="text-center"><img src="{{ asset('images/avatar.png') }}" class="img-fluid" style="max-width: 75px;" alt=""></td>
												<td>{{ $user->name }}</td>
												<td>{{ $user->email }}</td>
												<td>{{ $user->created_at }}</td>
												<td>
													{!! show_status_user($user->status) !!}
												</td>												 
												<td>administrator</td>
												<td class="text-center">
													<a href="#" class="p-1"><i class="feather icon-edit-1"  style="font-size:16px; color: #2196f3;"></i></a>
													<a href="#" class="p-1"><i class="feather icon-trash-2" onclick='return confirm("Are you sure to want to delete it?")' style="font-size:16px;  color:red"></i></a>
												</td>
											</tr> 
											@endforeach
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
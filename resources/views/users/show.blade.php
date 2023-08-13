@extends('layouts.app')
@section('content')
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Show User</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
							<li class="breadcrumb-item"><a href="{{ route('users.index') }}">Data User</a> </li>
							<li class="breadcrumb-item active">Show</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 margin-tb">
						<div class="card card-info card-b-big-text">
							<div class="card-header">
								<h3 class="card-title">Data User</h3>
							</div>
							<div class="card-body">
								<div class="row">
									{{-- <div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<b>View Order:</b> <br>
											{{$category->view_order}}
										</div>
									</div> --}}
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<b>Name:</b> <br>
											{{$user->name}}
										</div>
									</div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<b>Email:</b> <br>
											{{$user->email}}
										</div>
									</div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<b>Role:</b> <br>
											@if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
                                                    {{-- <label class="badge badge-success">{{ $v }}</label> --}}
                                                    <label>{{ $v }}</label>
                                                @endforeach
                                            @endif
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<div class="row">
									<div class="col-md-2">
										<div class="form-group full-width">
											<a href="{{ route('users.index') }}" class="btn btn-danger full-width btn-block">Back</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
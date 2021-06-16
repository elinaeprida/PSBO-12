@extends('admin.layouts.admin')

@section('nav')
<ul class="menu js__accordion">
	<li>
		<a class="waves-effect" href="/admin"><i class="menu-icon ti-dashboard"></i><span>Homepage</span></a>
	</li>
	<li class="current">
		<a class="waves-effect" href="/admin/about"><i class="menu-icon ti-calendar"></i><span>About</span></a>
	</li>
	<li>
		<a class="waves-effect" href="/admin/alumni"><i class="menu-icon ti-user"></i><span>Alumni</span></a>
	</li>
</ul>
@endsection

@section('content')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-llg-8 col-xs-12 content-align-center">
				<div class="box-content card white">
					<h4 class="box-title">About Us</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<div class="border rounded-lg px-3 py-2">
							<div class="form-horizontal" role="form">
								@foreach ($abouts as $about)
								<div class="form-group row">
									<label class="col-md-2 col-form-label">Judul</label>
									<div class="col-md-10 form-control-plaintext">
										{{ $about->title }} 
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-2 col-form-label">Sub Judul</label>
									<div class="col-md-10 form-control-plaintext">
										{{ $about->sub_title }} 
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-2 col-form-label">Deskripsi</label>
									<div class="col-md-10 form-control-plaintext">
										{{ $about->description }}
									</div>
								</div>
								<div class="d-flex justify-content-end">
									<a href="{{url('/admin/about/'.$about->id.'/edit')}}" class="btn btn-primary waves-light waves-effect px-4 mt-2">Edit</a>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-llg-8 col-xs-12 content-align-center">
				<div class="box-content card white">
					<h4 class="box-title">Contact</h4>
					@foreach ($contacts as $contact)
					<div class="card-content">
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td style="width: 15%">Location</td>
									<td>{{ $contact->location }}</td>
								</tr>
								<tr>
									<td>Phone</td>
									<td>{{ $contact->phone }}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>{{ $contact->email }}</td>
								</tr>
								<tr>
									<td>Link More</td>
									<td>{{ $contact->link_more }}</td>
								</tr>
							</tbody>
						</table>
						<div class="d-flex justify-content-end">
							<a href="{{url('/admin/contact/'.$contact->id.'/edit')}}" class="btn btn-primary waves-light waves-effect px-4 mt-2">Edit</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<footer class="footer">
			<ul class="list-inline">
				<li>2021 © Kom-Hub</li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
@endsection
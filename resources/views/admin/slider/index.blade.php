@extends('admin.layouts.admin')

@section('nav')
<ul class="menu js__accordion">
	<li class="current">
		<a class="waves-effect" href="/admin"><i class="menu-icon ti-dashboard"></i><span>Homepage</span></a>
	</li>
	<li>
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
					<h4 class="box-title">Slider</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<div class="d-flex justify-content-end align-items-center mb-3">
							@if ($sliders->count() < 3)
							<div class="d-flex justify-content-between align-items-center mb-2">
								<a href="{{url('admin/create')}}" class="btn btn-success waves-light waves-effect px-4 mt-2">+ Tambah Slider</a>
							</div>
							@endif
						</div>
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Jabatan</th>
									<th>Perusahaan</th>
									<th>Angkatan</th>
									<th>Avatar</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach ( $sliders as $index => $slider )
								<tr>
									<th scope="row">{{ $loop->iteration }}</th>
									<td>{{ $slider->user->name }}</td>
									<td>{{ $slider->alumni->jabatan }}</td>
									<td>{{ $slider->alumni->perusahaan }}</td>
									<td>{{ $slider->alumni->angkatan }}</td>
									<td>{{ $slider->alumni->avatar }}</td>
									<td>
										<form action="{{ url('/admin/slider/'.$slider->id) }}" method="post">
											@method('delete')
											@csrf
											<button type="submit" class="btn btn-sm btn-danger delete-btn">Hapus</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-llg-8 col-xs-12 content-align-center">
				<div class="box-content card white">
					<h4 class="box-title">Graduation Statistics</h4>
					<div class="card-content">
						@foreach ($grads as $grad)
						<div class="d-flex justify-content-end align-items-center mb-3">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<a href="{{url('admin/'.$grad->id.'/edit')}}" class="btn btn-primary waves-light waves-effect px-4 mt-2">Edit</a>
							</div>
						</div>
						<div class="row small-spacing justify-content-center">
							<div class="col-lg-4 col-xs-12">
								<div class="box-content">
									<h4 class="box-title text-info">Mahasiswa lulus tepat waktu</h4>
									<div class="content">
										<div class="right-content">
											<h2 class="counter text-info">{{ $grad->tepat_waktu}} %</h2>
											<p class="text text-info"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-xs-12">
								<div class="box-content">
									<h4 class="box-title text-success">Mendapatkan pekerjaan < 3 bulan</h4>
									<div class="content">
										<div class="right-content">
											<h2 class="counter text-success">{{ $grad->dapat_kerja}} %</h2>
											<p class="text text-success"></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-xs-12">
								<div class="box-content">
									<h4 class="box-title text-success">Pekerjaan sesuai bidang keahlian</h4>
									<div class="content">
										<div class="justify-content-center">
											<h2 class="counter text-danger">{{ $grad->kerja_sesuai}} %</h2>
											<p class="text text-danger"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
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
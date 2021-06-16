@extends('admin.layouts.admin')

@section('nav')
<ul class="menu js__accordion">
	<li>
		<a class="waves-effect" href="/admin"><i class="menu-icon ti-dashboard"></i><span>Homepage</span></a>
	</li>
	<li>
		<a class="waves-effect" href="/admin/about"><i class="menu-icon ti-calendar"></i><span>About</span></a>
	</li>
	<li class="current">
		<a class="waves-effect" href="/admin/alumni"><i class="menu-icon ti-user"></i><span>Alumni</span></a>
	</li>
</ul>
@endsection

@section('content')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lgl-8 col-xs-12 content-align-center">
				<div class="box-content card white">
					<h4 class="box-title">Daftar Alumni</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<div class="d-flex justify-content-end align-items-center mb-4">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<a href="{{url('admin/alumni/create')}}" class="btn btn-success waves-light waves-effect px-4 mt-2">+ Tambah Alumni</a>
							</div>
						</div>
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Angkatan</th>
									<th>Spesialisasi</th>
									<th>Jabatan</th>
									<th>Perusahaan</th>
									<th>Dom. Pekerjaan</th>
									<th>Dom. Asal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach ( $alumnis as $index => $alumni )
								<tr>
									<th scope="row">{{ $loop->iteration }}</th>
									<td>{{ $alumni->user->name }}</td>
									<td>{{ $alumni->angkatan }}</td>
									<td>{{ $alumni->spesialisasi }}</td>
									<td>{{ $alumni->jabatan }}</td>
									<td>{{ $alumni->perusahaan }}</td>
									<td>{{ $alumni->domisili_pekerjaan }}</td>
									<td>{{ $alumni->domisili_asal }}</td>
									<td>
										<form action="{{ url('/admin/alumni/'.$alumni->id) }}" method="post">
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
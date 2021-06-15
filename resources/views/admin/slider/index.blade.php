@extends('admin.layouts.admin')

@section('content')
    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
					<h5 class="modal-title" id="addModalTitle">Tambah Slider</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
                </div>
                <form class="needs-validation" novalidate action="{{ route('dashboard') }}" method="post">
                    @csrf
                    <div class="modal-body">
						<div class="form-group">
							<label class="col-form-label" name="alumni[]">Alumni</label>
							<select class="form-control">
								@foreach ($alumnis as $alumni)
									<option value="{{ $alumni->id }}">{{ $alumni->user->name }}</option>
								@endforeach
							</select>
						</div>
                        <div class="form-group">
                            <label class="col-form-label">User</label>
							<select class="form-control" name="user[]">
								@foreach ($users as $user)
									<option value="{{ $user->id }}">{{ $user->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editModalTitle">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
                </div>
                <form class="needs-validation" novalidate action="{{ route('dashboard') }}" method="post">
					@method('PATCH')
					@foreach ($grads as $grad)
                    <div class="modal-body">
						<div class="form-group row">
							<label class="col-md-6 col-form-label">Mahasiswa lulus tepat waktu</label>
							<div class="col-md-2 row ml-0">
								<input type="number" name="tepat_waktu" class="form-control" value="{{old('tepat_waktu', $grad->tepat_waktu)}}">
								@error('tepat_waktu')<div class="invalid-feedback">{{$message}}</div>@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-6 col-form-label">Mendapatkan pekerjaan < 3 bulan</label>
							<div class="col-md-2 row ml-0">
								<input type="number" name="dapat_kerja" class="form-control" value="{{old('dapat_kerja', $grad->dapat_kerja)}}">
								@error('dapat_kerja')<div class="invalid-feedback">{{$message}}</div>@enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-6 col-form-label">Pekerjaan sesuai bidang keahlian</label>
							<div class="col-md-2 row ml-0">
								<input type="number" name="kerja_sesuai" class="form-control" value="{{old('kerja_sesuai', $grad->kerja_sesuai)}}">
								@error('kerja_sesuai')<div class="invalid-feedback">{{$message}}</div>@enderror
							</div>
						</div>
					</div>
					@endforeach
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
							<button data-toggle="modal" data-target="#addModal" class="btn btn-success waves-light waves-effect px-4">
								+ Tambah Slider
							</button>
							@endif
						</div>
						<table class="table">
							<caption>Optional table caption.</caption>
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
						<div class="d-flex justify-content-end align-items-center mb-3">
							<button data-toggle="modal" data-target="#editModal" class="btn btn-primary waves-light waves-effect px-4">
								+ Edit Data
							</button>
						</div>
						<div class="row small-spacing justify-content-center">
							@foreach ($grads as $grad)
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
									<!-- /.box-title -->
									<div class="content">
										<div class="right-content">
											<h2 class="counter text-success">{{ $grad->dapat_kerja}} %</h2>
											<!-- /.counter -->
											<p class="text text-success"></p>
											<!-- /.text -->
										</div>
										<!-- .right-content -->
									</div>
									<!-- /.content widget-stat -->
								</div>
								<!-- /.box-content -->
							</div>
							<!-- /.col-lg-4 col-xs-12 -->
							<div class="col-lg-4 col-xs-12">
								<div class="box-content">
									<h4 class="box-title text-success">Pekerjaan sesuai bidang keahlian</h4>
									<!-- /.box-title -->
									<div class="content">
										<div class="justify-content-center">
											<h2 class="counter text-danger">{{ $grad->kerja_sesuai}} %</h2>
											<!-- /.counter -->
											<p class="text text-danger"></p>
											<!-- /.text -->
										</div>
										<!-- .right-content -->
									</div>
									<!-- /.content widget-stat -->
								</div>
								<!-- /.box-content -->
							</div>
							<!-- /.col-lg-4 col-xs-12 -->
							@endforeach
						</div>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>
		</div>
		<!-- /.row -->		
		<footer class="footer">
			<ul class="list-inline">
				<li>2021 © Kom-Hub</li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
@endsection
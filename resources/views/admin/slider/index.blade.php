@extends('admin.layouts.app')

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
                <form class="needs-validation" novalidate action="{{ url('/admin/dashboard/slider/{slider}') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">User</label>
							<select class="form-control">
								@foreach ($users as $user)
									<option value="{{ $user->id }}">{{ $user->name }}</option>
								@endforeach
							</select>
						</div>
                        <div class="form-group">
                            <label class="col-form-label">Alumni</label>
							<select class="form-control">
								@foreach ($alumnis as $alumni)
									<option value="{{ $alumni->user->id }}">{{ $alumni->user->name }}</option>
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
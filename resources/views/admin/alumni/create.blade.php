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
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Tambah Alumni</h4>
					<div class="card-content">
						<form class="form-horizontal mt-4" role="form" method="POST" action="{{ url('/admin/alumni') }}">
							@method('patch')
							@csrf
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 col-control-label">Nama</label>
                                <select class="col-sm-8" name="user_id">
                                    @foreach ($users as $user)
                                        <option name="user_id" value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Angkatan</label>
								<div class="col-sm-9">
									<input name="email" type="text" class="form-control" id="inp-type-4" placeholder="Masukkan angkatan">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Spesialisasi</label>
								<div class="col-sm-9">
									<input name="link_more" type="text" class="form-control" id="inp-type-4" placeholder="Masukkan spesialisasi">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Jabatan</label>
								<div class="col-sm-9">
									<input name="link_more" type="text" class="form-control" id="inp-type-4" placeholder="Masukkan jabatan">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Domisili Pekerjaan</label>
								<div class="col-sm-9">
									<input name="link_more" type="text" class="form-control" id="inp-type-4" placeholder="Masukkan domisili pekerjaan">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Domisili Asal</label>
								<div class="col-sm-9">
									<input name="link_more" type="text" class="form-control" id="inp-type-4" placeholder="Masukkan domisili asal">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Link Instagram</label>
								<div class="col-sm-9">
									<input name="link_more" type="text" class="form-control" id="inp-type-4" placeholder="Masukkan instagram">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Link Linkedin</label>
								<div class="col-sm-9">
									<input name="link_more" type="text" class="form-control" id="inp-type-4" placeholder="Masukkan link linkedin">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Link Github</label>
								<div class="col-sm-9">
									<input name="link_more" type="text" class="form-control" id="inp-type-4" placeholder="Masukkan link github">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-3"></div>
								<div class="col-md-9">
									<a href="{{route('admin_alumni')}}" class="btn btn-light waves-effect">Kembali</a>
									<button type="submit" class="btn btn-primary waves-light waves-effect mr-2">Simpan</button>
								</div>
							</div>
						</form>
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
</div>
@endsection
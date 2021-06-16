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
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Edit Graduation Statistics</h4>
					<div class="card-content">
                        <form class="form-horizontal mt-4" role="form" action="{{ url('admin/'.$grad->id) }}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inp-type-5" class="col-sm-6 control-label">Mahasiswa lulus tepat waktu</label>
                                    <div class="col-sm-3">
                                        <input type="number" name="tepat_waktu" class="form-control" value="{{old('tepat_waktu', $grad->tepat_waktu)}}">
                                        @error('tepat_waktu')<div class="invalid-feedback">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-4" class="col-sm-6 control-label">Mendapatkan pekerjaan < 3 bulan</label>
                                    <div class="col-sm-3">
                                        <input type="number" name="dapat_kerja" class="form-control" value="{{old('dapat_kerja', $grad->dapat_kerja)}}">
                                        @error('dapat_kerja')<div class="invalid-feedback">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-4" class="col-sm-6 control-label">Pekerjaan sesuai bidang keahlian</label>
                                    <div class="col-sm-3">
                                        <input type="number" name="kerja_sesuai" class="form-control" value="{{old('kerja_sesuai', $grad->kerja_sesuai)}}">
                                        @error('kerja_sesuai')<div class="invalid-feedback">{{$message}}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
								<div class="col-md-3"></div>
								<div class="col-md-9">
                                    <a href="{{route('dashboard')}}" class="btn btn-light waves-effect">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
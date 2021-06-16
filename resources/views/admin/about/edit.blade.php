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
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Edit Halaman About Us</h4>
					<div class="card-content">
						<form class="form-horizontal mt-4" role="form" method="POST" action="{{ url('/admin/about/'.$about->id) }}">
							@method('patch')
							@csrf
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Judul</label>
								<div class="col-sm-9">
									<input name="title" type="text" class="form-control" id="inp-type-4" value="{{old('title', $about->title)}}">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Sub Judul</label>
								<div class="col-sm-9">
									<input name="sub_title" type="text" class="form-control" id="inp-type-4" value="{{old('sub_title', $about->sub_title)}}">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-5" class="col-sm-3 control-label">Deskripsi</label>
								<div class="col-sm-9">
									<textarea name="description" class="form-control">{{old('description', $about->description)}}</textarea>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-3"></div>
								<div class="col-md-9">
									<a href="{{route('admin_about')}}" class="btn btn-light waves-effect">Kembali</a>
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
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
					<h4 class="box-title">Edit Contact</h4>
					<div class="card-content">
						<form class="form-horizontal mt-4" role="form" method="POST" action="{{ url('/admin/contact/'.$contact->id) }}">
							@method('patch')
							@csrf
                            <div class="form-group">
                                <label for="inp-type-5" class="col-sm-3 control-label">Location</label>
                                <div class="col-sm-9">
                                    <textarea name="location" class="form-control">{{old('location', $contact->location)}}</textarea>
                                </div>
                            </div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Phone</label>
								<div class="col-sm-9">
									<input name="phone" type="text" class="form-control" id="inp-type-4" value="{{old('phone', $contact->phone)}}">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input name="email" type="text" class="form-control" id="inp-type-4" value="{{old('email', $contact->email)}}">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Link More</label>
								<div class="col-sm-9">
									<input name="link_more" type="text" class="form-control" id="inp-type-4" value="{{old('link_more', $contact->link_more)}}">
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
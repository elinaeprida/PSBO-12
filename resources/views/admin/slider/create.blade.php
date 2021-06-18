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
					<h4 class="box-title">Tambah Slider</h4>
					<div class="card-content">
                        <form class="needs-validation" novalidate action="{{ route('dashboard') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-form-label">Alumni</label>
                                    <select class="form-control" name="alumni_id">
                                        @foreach ($alumnis as $alumni)
                                            <option value="{{ $alumni->id }}" @if($alumni->id == old('alumni_id')) selected @endif>{{ $alumni->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">User</label>
                                    <select class="form-control" name="user_id">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" @if($user->id == old('user_id')) selected @endif>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
								<a href="{{route('dashboard')}}" class="btn btn-light waves-effect">Kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
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
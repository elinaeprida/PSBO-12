@extends('admin.layouts.app')

@section('content')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Create Slider</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Text</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="inp-type-1" placeholder="Some text value ...">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-2" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" id="inp-type-2" placeholder="Email address">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-3" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" id="inp-type-3" placeholder="Password" value="Password">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Placeholder</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="inp-type-4" placeholder="Placeholder">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-5" class="col-sm-3 control-label">Textarea</label>
								<div class="col-sm-9">
									<textarea class="form-control" id="inp-type-5" placeholder="Write your meassage"></textarea>
								</div>
							</div>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>
			<!-- /.col-lg-3 col-xs-12 -->
			<div class="col-lg-9 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Statistics</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div id="svg-animation-chartist-chart" class="chartist-chart" style="height: 314px"></div>
					<!-- /#svg-animation-chartist-chart.chartist-chart -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-9 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

		<div class="row small-spacing">

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-info">Site Traffic</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-1" class="left-content margin-top-15"></div>
						<!-- /#traffic-sparkline-chart-1 -->
						<div class="right-content">
							<h2 class="counter text-info">278</h2>
							<!-- /.counter -->
							<p class="text text-info">Visitors Income</p>
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
					<h4 class="box-title text-success">Trade Traffic</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-2" class="left-content margin-top-10"></div>
						<!-- /#traffic-sparkline-chart-2 -->
						<div class="right-content">
							<h2 class="counter text-success">36%</h2>
							<!-- /.counter -->
							<p class="text text-success">Total Income</p>
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
					<h4 class="box-title text-success">Sales Traffic</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-3" class="left-content"></div>
						<!-- /#traffic-sparkline-chart-3 -->
						<div class="right-content">
							<h2 class="counter text-danger">849 <i class="fa fa-usd"></i></h2>
							<!-- /.counter -->
							<p class="text text-danger">Credit Earned</p>
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

		<div class="row small-spacing">
			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Activity</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="activity-list">
						<div class="activity-item">
							<div class="bar bg-primary">
								<div class="dot bg-primary"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">10 min</div>
								<!-- /.date -->
								<div class="text">
									Harry has finished "Amaza HTML" task
								</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-danger">
								<div class="dot bg-danger"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">15 min</div>
								<!-- /.date -->
								<div class="text">
									You completed your task
								</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-success">
								<div class="dot bg-success"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">30 min</div>
								<!-- /.date -->
								<div class="text">
									New updated has been installed
								</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-violet">
								<div class="dot bg-violet"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">1 hour ago</div>
								<!-- /.date -->
								<div class="text">Write some comments</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-warning">
								<div class="dot bg-warning"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">1 day ago</div>
								<!-- /.date -->
								<div class="text">4 friends request accepted</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-orange">
								<div class="dot bg-orange"></div>
								<div class="last-dot bg-orange"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">12 days ago</div>
								<!-- /.date -->
								<div class="text">Daisy has joined your team</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
					</div>
					<!-- /.activity-list -->
					<a href="#" class="activity-link">View all activity <i class="fa fa-angle-down"></i></a>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->

			<div class="col-lg-8 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Purchases</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Product</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<table class="table table-striped margin-bottom-10">
						<thead>
							<tr>
								<th style="width:40%;">Product</th>
								<th>Price</th>
								<th>Date</th>
								<th>State</th>
								<th style="width:5%;"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Amaza Themes</td>
								<td>$71</td>
								<td>Nov 12,2016</td>
								<td class="text-success">Completed</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Macbook</td>
								<td>$142</td>
								<td>Nov 10,2016</td>
								<td class="text-danger">Cancelled</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Samsung TV</td>
								<td>$200</td>
								<td>Nov 01,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Ninja Admin</td>
								<td>$200</td>
								<td>Oct 28,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Galaxy Note 5</td>
								<td>$200</td>
								<td>Oct 28,2016</td>
								<td class="text-success">Completed</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>CleanUp Themes</td>
								<td>$71</td>
								<td>Oct 22,2016</td>
								<td class="text-success">Completed</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Facebook WP Plugin</td>
								<td>$10</td>
								<td>Oct 15,2016</td>
								<td class="text-success">Completed</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Iphone 7</td>
								<td>$100</td>
								<td>Oct 12,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Nova House</td>
								<td>$100</td>
								<td>Oct 12,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Repair Cars</td>
								<td>$35</td>
								<td>Oct 12,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							
						</tbody>
					</table>
					<!-- /.table -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
		<!-- /.row -->		
		<footer class="footer">
			<ul class="list-inline">
				<li>2016 © NinjaAdmin.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
@endsection
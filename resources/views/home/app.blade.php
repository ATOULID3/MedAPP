
@extends('welcome')
@extends('sidebar')
@extends('letbar')
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-80-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue">Dr {{  auth()->user()->name  }}!</div>
						</h4>
						<p class="font-18 max-width-600">Greetings, <span style="color: rgb(93, 0, 255);">Dr. {{  auth()->user()->name  }} !</span> We're delighted to have you back at <span style="color: rgb(93, 0, 255);">MEDAPP.</span> Your commitment to providing exceptional healthcare is truly valued, and we're here to support you every step of the way. If you have any problems you can tell Our support team.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$clientCount}}</div>
								<div class="weight-600 font-14">Number of Clients</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$reservationCount}}</div>
								<div class="weight-600 font-14">Number of Reservation</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$taskCount}}</div>
								<div class="weight-600 font-14">Number of Tasks</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$invoiceCount}}</div>
								<div class="weight-600 font-14">Number of Invoices</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Activity</h2>
						<div id="chart5"></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Lead Target</h2>
						<div id="chart6"></div>
					</div>
				</div>
			</div>
		{{--<div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Products</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Product</th>
							<th>Name</th>
							<th>Color</th>
							<th>Size</th>
							<th>Price</th>
							<th>Oty</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-1.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Shirt</h5>
								by John Doe
							</td>
							<td>Black</td>
							<td>M</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-2.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Boots</h5>
								by Lea R. Frith
							</td>
							<td>brown</td>
							<td>9UK</td>
							<td>$900</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-3.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Hat</h5>
								by Erik L. Richards
							</td>
							<td>Orange</td>
							<td>M</td>
							<td>$100</td>
							<td>4</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-4.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Long Dress</h5>
								by Renee I. Hansen
							</td>
							<td>Gray</td>
							<td>L</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-5.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Blazer</h5>
								by Vicki M. Coleman
							</td>
							<td>Blue</td>
							<td>M</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>--}}
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Created By <a href="#" target="_blank">BADR EDDINE ATOULID</a>
			</div>
		</div>
	</div>

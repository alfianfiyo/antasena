<?= $this->extend('layout/template');?>
<?= $this->section('conten');?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<!--begin::Row-->
			<div class="row">
				<div class="col-lg-12 col-xl-12">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Menu Pelaporan</h3>
						</div>
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
								<div class="form-group row">
									<div class="col-lg-4">
										<label>ID Pelapor</label>
											<select class="form-control selectpicker" data-actions-box="true" data-live-search="true">
												<option></option>
												<option value="">135001000</option>
												<option value="">135002000</option>
												<option value="">135003000</option>
												<option value="">135004000</option>
												<option value="">135005000</option>
												<option value="">135006000</option>
												<option value="">135008000</option>
												<option value="">135009000</option>
												<option value="">135010000</option>
												<option value="">135011000</option>
												<option value="">135012000</option>
												<option value="">135013000</option>
												<option value="">135014000</option>
											</select>
									</div>
									<div class="col-lg-4">
										<label>Periode</label>
										<select class="form-control selectpicker">
											<option></option>
											<option>Harian</option>
											<option>Mingguan</option>
											<option>Bulanan</option>
											<option>Triwulan</option>
											<option>Semester</option>
											<option>Tahunan</option>
										</select>
									</div>
									<div class="col-lg-4">
										<label>Periode Data</label>											
										<input class="form-control" type="date" value="" id="example-date-input" />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-4">
										<label>Kelompok Informasi Data</label>
										<select class="form-control selectpicker" id="Kelompok2" onchange="option2()">
											<option>--Pilih Kelompok Informasi--</option>
											<option value="1">Laporan Keuangan</option>
											<option value="2">Laporan Resiko Dan Permodalan</option>
											<option value="3">Laporan Kegiatan Sistem Pembayaran Dan Jasa Keuangan</option>
											<option value="4">Laporan Data Pokok</option>
										</select>
									</div>
									<div class="col-lg-4">
										<label>Informasi Data</label>
										<select class="form-control selectpicker"  id="informasi2" data-actions-box="true" data-live-search="true">
											<option></option>
										</select>
									</div>
									<div class="col-lg-4">
										<button type="reset" class="btn btn-primary mr-2 mt-7">Search</button>
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->
				</div>	
				<!--begin::Card-->
				<div class="card card-custom">
					<div class="card-header flex-wrap">
						<div class="card-title">
						</div>
						<div class="card-toolbar">
							<!--begin::Dropdown-->
							
							<!--end::Dropdown-->
							<!--begin::Button-->
							<a href="#" class="btn btn-primary font-weight-bolder">
							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<circle fill="#000000" cx="9" cy="15" r="6" />
										<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>New Record</a>
							<!--end::Button-->
						</div>
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
							<thead>
								<tr>
									<th>Record ID</th>
									<th>Order ID</th>
									<th>Country</th>
									<th>Ship City</th>
									<th>Ship Address</th>
									<th>Company Agent</th>
									<th>Company Name</th>
									<th>Ship Date</th>
									<th>Status</th>
									<th>Type</th>
									<th>Type2</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>64616-103</td>
									<td>Brazil</td>
									<td>São Félix do Xingu</td>
									<td>698 Oriole Pass</td>
									<td>Hayes Boule</td>
									<td>Casper-Kerluke</td>
									<td>10/15/2017</td>
									<td>5</td>
									<td>66998ddjdjd ksskdskj kjdsjksdkj</td>
									<td>66998ddjdjd ksskdskj kjdsjksdkj</td>
									<td nowrap="nowrap"></td>
								</tr>
								
							</tbody>
						</table>
						<!--end: Datatable-->
					</div>
				</div>
				<!--end::Card-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->
<?= $this->endSection();?>
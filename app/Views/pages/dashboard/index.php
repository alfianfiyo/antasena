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
				<div class="col-xl-4">
					<!--begin::Mixed Widget 2-->
					<div class="card card-custom bg-gray-100 gutter-b card-stretch">
						<!--begin::Header-->
						<div class="card-header border-0 bg-primary py-5">
							<h3 class="card-title font-weight-bolder text-white">Proses test lagi ketiga</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0 position-relative overflow-hidden">
							<!--begin::Chart-->
							<div class="card-rounded-bottom bg-primary" style="height: 100px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-spacer mt-n25">
								<!--begin::Row-->
								<div class="row m-0">
									<div class="col bg-white px-6 py-8 rounded-xl mr-7 mb-7">
										<span class="svg-icon svg-icon-4x svg-icon-info d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        <rect x="0" y="0" width="24" height="24"/>
											        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
											        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
											        <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
											        <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
											    </g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="#" class="text-info font-weight-bold font-size-h6" data-toggle="modal" data-target="#genetare_txt">Generate File .txt BI</a>
									</div>
									<div class="col bg-white px-6 py-8 rounded-xl mb-7">
										<span class="svg-icon svg-icon-4x svg-icon-warning d-block my-2">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        <rect x="0" y="0" width="24" height="24"/>
											        <path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z" fill="#000000"/>
											        <path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z" fill="#000000" opacity="0.3"/>
											        <path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) "/>
											    </g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<a href="#" class="text-warning font-weight-bold font-size-h6 mt-2" data-toggle="modal" data-target="#pipe_core">Pipe Data From Core</a>
									</div>
									<!-- modal -->
									<?= $this->include('pages/dashboard/modal_generate_txt');?>
									<?= $this->include('pages/dashboard/modal_pipe_core');?>
									<!-- end modal -->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 2-->
				</div>
				<div class="col-lg-12 col-xl-8">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Manu Pelaporan</h3>
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
									<div class="col-lg-6">
										<label>Kelompok Informasi Data</label>
										<select class="form-control selectpicker" id="Kelompok2" onchange="option2()">
											<option>--Pilih Kelompok Informasi--</option>
											<option value="1">Laporan Keuangan</option>
											<option value="2">Laporan Resiko Dan Permodalan</option>
											<option value="3">Laporan Kegiatan Sistem Pembayaran Dan Jasa Keuangan</option>
											<option value="4">Laporan Data Pokok</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label>Informasi Data</label>
										<select class="form-control selectpicker"  id="informasi2" data-actions-box="true" data-live-search="true">
											<option></option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<button type="reset" class="btn btn-primary mr-2">Search</button>
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->
				</div>	
			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<script type="text/javascript">
	function option() {
		var cek_kelompok =  document.getElementById("Kelompok1").value;
		//reset append
		$("#informasi1").empty().append();
		// end reset
			$.ajax({
	            url   : '/Home/options/'+cek_kelompok,
	            async : false,
	            dataType : 'json',
	            success : function(data){
	                var i;
	                var options = $("#informasi1"); 
	                console.log(data);
	                for(i=0; i<data.length; i++){

	                    $("#informasi1").append('<option value="' + data[i].m_value + '">' + data[i].m_name + '</option>').selectpicker('refresh'); 
	                }
	            }
          	});
	}

	function option2() {
		var cek_kelompok =  document.getElementById("Kelompok2").value;
		//reset append
		$("#informasi2").empty().append();
		// end reset
			$.ajax({
	            url   : '/Home/options/'+cek_kelompok,
	            async : false,
	            dataType : 'json',
	            success : function(data){
	                var i;
	                var options = $("#informasi2"); 
	                console.log(data);
	                for(i=0; i<data.length; i++){

	                    $("#informasi2").append('<option value="' + data[i].m_value + '">' + data[i].m_name + '</option>').selectpicker('refresh'); 
	                }
	            }
          	});
	}
</script>
<!--end::Content-->
<?= $this->endSection();?>
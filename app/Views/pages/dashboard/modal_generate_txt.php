<div class="modal fade" id="genetare_txt" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Generate File .txt BI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                    <div class="card card-custom example example-compact">
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
								<div class="form-group m-0">
									<div class="row">
										<div class="col-lg-5 col-md-9 col-sm-12">
											<label>ID Pelapor<span class="text-danger">*</span></label>
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
										<div class="col-lg-3 col-md-9 col-sm-12">
											<label>Periode<span class="text-danger">*</span></label>
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
										<div class="col-lg-4 col-md-9 col-sm-12">
											<label>Periode Data<span class="text-danger">*</span></label>
											<input class="form-control" type="date" value="2011-08-19" id="example-date-input" />
										</div>
									</div>
								</div>
								<div class="separator separator-dashed my-8"></div>
								<div class="form-group m-0">
									<div class="row">
										<div class="col-lg-6 col-md-9 col-sm-12">
											<label>Kelompok Informasi Data</label>
											<select class="form-control selectpicker" id="Kelompok1" onchange="option()">
													<option>--Pilih Kelompok Informasi--</option>
													<option value="1">Laporan Keuangan</option>
													<option value="2">Laporan Resiko Dan Permodalan</option>
													<option value="3">Laporan Kegiatan Sistem Pembayaran Dan Jasa Keuangan</option>
													<option value="4">Laporan Data Pokok</option>
											</select>
										</div>
										<div class="col-lg-6 col-md-9 col-sm-12">
											<label>Informasi Data</label>
											<select class="form-control selectpicker"  id="informasi1" multiple="multiple" data-actions-box="true" data-live-search="true">
											</select>
										</div>
									</div>
								</div>

							</div>
							<div class="modal-footer">
					                <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Close</button>
					                <button type="button" class="btn btn-primary font-weight-bold">Proses</button>
					            </div>
						</form>
						<!--end::Form-->
					</div>
            </div>
            
        </div>
    </div>
</div>
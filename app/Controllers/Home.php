<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data =[
			'Dashboard' => true,
			'title' =>'Dashboard'
		];

		return view('/pages/dashboard/index',$data);
	}

	public function options($key)
	{
		if($key=='1'){
			$data = array(
				// ["m_value" => "xx", "m_name" => "--Pilih Informasi data--"],
				["m_value" => "ayd01", "m_name" => "Agunan Yang Diambil Alih"],
	            ["m_value" => "aks01", "m_name" => "Akseptasi"],
	            ["m_value" => "aak01", "m_name" => "Aset Antar Kantor"],
	            ["m_value" => "aip01", "m_name" => "Aset Istishna dalam Penyelesaian"],
	            ["m_value" => "akl01", "m_name" => "Aset Keuangan Lainnya"],
	            ["m_value" => "adb01", "m_name" => "Aset Keuangan Yang Dihapus Buku"],
	            ["m_value" => "asl01", "m_name" => "Aset Lainnya"],
	            ["m_value" => "ati01", "m_name" => "Aset Tetap & Inventaris"],
	            ["m_value" => "atb01", "m_name" => "Aset Tidak Berwujud"],
	            ["m_value" => "dap01", "m_name" => "Deposito"],
	            ["m_value" => "gar01", "m_name" => "Garansi Yang Diberikan"],
	            ["m_value" => "gir01", "m_name" => "Giro"],
	            ["m_value" => "ilc01", "m_name" => "Irrevocable L/C"],
	            ["m_value" => "kas01", "m_name" => "Kas Dalam Valuta Asing"],
	            ["m_value" => "krp01", "m_name" => "Kredit/Pembiayaan"],
	            ["m_value" => "lrg01", "m_name" => "Laporan Laba/Rugi"],
	            ["m_value" => "lak01", "m_name" => "Liabilitas Antar Kantor"],
	            ["m_value" => "lbi01", "m_name" => "Liabilitas Kepada Bank Indonesia"],
	            ["m_value" => "lbl01", "m_name" => "Liabilitas Kepada Bank Lain"],
	            ["m_value" => "lil01", "m_name" => "Liabilitas Lainnya"],
	            ["m_value" => "pbi01", "m_name" => "Penempata Pada Bank Indonesia"],
	            ["m_value" => "pbl01", "m_name" => "Penenpatan Pada Bank Lain"],
	            ["m_value" => "pen01", "m_name" => "Penerusan Dana (Channeling)"],
	            ["m_value" => "pkl01", "m_name" => "Penghasilan/Beban Komprehensif Lainnya"],
	            ["m_value" => "pyr01", "m_name" => "Penyertaan Modal"],
	            ["m_value" => "psd01", "m_name" => "Persediaan"],
	            ["m_value" => "pyd01", "m_name" => "Pinjaman/Pembiayaan Yang Diterima"],
	            ["m_value" => "nrc01", "m_name" => "Pos - Pos Laporan Posisi Keuangan"],
	            ["m_value" => "ptb01", "m_name" => "Properti Terbengkalai"],
	            ["m_value" => "adm01", "m_name" => "Rekening Administratif"],
	            ["m_value" => "rtd01", "m_name" => "Rekening Tunda"],
	            ["m_value" => "mod01", "m_name" => "Rincian Modal"],
	            ["m_value" => "sjn01", "m_name" => "Setoran Jaminan"],
	            ["m_value" => "srp01", "m_name" => "Surat Berharga Repo dan Liabilita Repo"],
	            ["m_value" => "sym01", "m_name" => "Surat Berharga Yang Dimiliki"],
	            ["m_value" => "sbt01", "m_name" => "Surat Berharga Yang Diterbitkan"],
	            ["m_value" => "tab01", "m_name" => "Tabungan"],
	            ["m_value" => "rev01", "m_name" => "Tagihan Atas Surat Berharga yang Dibeli Dengan Janji Jual Kembali(Reverse Repo)"],
	            ["m_value" => "tpu01", "m_name" => "Transaksi Pasar Uang Antar Bank (PUAB/PUAS) & Deposit On Call (DOC)"],
	            ["m_value" => "tsd01", "m_name" => "Transaksi Spot & Derivatif"],
	            ["m_value" => "tsb01", "m_name" => "Transaksi Spot & Derivatif Yang Masih Berjalan"],
	            ["m_value" => "trs01", "m_name" => "Transaksi Surat Berharga dan Sertifikat Deposito di Pasar Sekunder"],
        	);
		}
		if($key=='2'){
			$data = array(
				// ["m_value" => "xx", "m_name" => "--Pilih Informasi data--"],
	            ["m_value" => "dpk01", "m_name" => "Dana Pihak Ketiga Untuk Giro Wajib Mnumum (DPKGWM)"],
	            ["m_value" => "duk01", "m_name" => "Dana Usaha KCBLN"],
	            ["m_value" => "lfr01", "m_name" => "Laporan Fraud APMK dan Uang Elektronik"],
	            ["m_value" => "pgd01", "m_name" => "Pengaduan"],
	            ["m_value" => "pys01", "m_name" => "Penyelesaian Sengketa"],
	            ["m_value" => "plk01", "m_name" => "Permasalahan LKD"],
	            ["m_value" => "pdn01", "m_name" => "Posisi Devisa Netto"],
	            ["m_value" => "pko01", "m_name" => "Proyeksi Arus Kas - Konsolidasi"],
	            ["m_value" => "pbn01", "m_name" => "Publikasi Negatif"],
	            ["m_value" => "pln01", "m_name" => "Pinjaman/Utang Luar Negeri dan Kewajiban Bank Lainnya dalam Valas Jangka Pendek"],
	            // ["m_value" => "xx", "m_name" => "Proyeksi Arus Kas - Ketiga Bisnis Utama"],
	            // ["m_value" => "xx", "m_name" => "Proyeksi Arus Kas - Rencana Pendanaan Pengguna"],
        	);
		}
		if($key=='3'){
			$data = array(
				// ["m_value" => "xx", "m_name" => "--Pilih Informasi data--"],
	            ["m_value" => "xx", "m_name" => "Agen LKD"],
	            ["m_value" => "xx", "m_name" => "Profil Infrastruktur APMK dan Uang Elektronik"],
	            ["m_value" => "xx", "m_name" => "Profil Krtu ATM/Debet"],
	            ["m_value" => "xx", "m_name" => "Profil Kartu Kredit"],
	            // ["m_value" => "xx", "m_name" => "Profil Proprietary Channel"],
	            ["m_value" => "xx", "m_name" => "Profil Delivery Channel"],
	            ["m_value" => "xx", "m_name" => "Remitasi"],
	            ["m_value" => "xx", "m_name" => "Suku Bunga Kredit"],
	            ["m_value" => "xx", "m_name" => "Suku Bunga Penawaran"],
	            ["m_value" => "xx", "m_name" => "Suku Bunga simpanan"],
	            ["m_value" => "xx", "m_name" => "Tingkat Imbalan Deposito Mudharabah"],
	            ["m_value" => "xx", "m_name" => "Uang Elektrinok - 	Profil (Ueprofil)"],
	            // ["m_value" => "xx", "m_name" => "Penyelenggaraan Kliring Settlement"],
	            // ["m_value" => "xx", "m_name" => "Transaksi Kartu ATM/Debet"],
        	);
		}
		if($key=='4'){
			$data = array(
				// ["m_value" => "xx", "m_name" => "--Pilih Informasi data--"],
	            ["m_value" => "alk01", "m_name" => "Agunan"],
	            ["m_value" => "dpp01", "m_name" => "Data Pokok Pelapor"],
	            ["m_value" => "grup1", "m_name" => "Grup"],
	            ["m_value" => "pl01", "m_name" => "Pihak Lawan"],
        	);
		}
        return json_encode($data);
	}

	

	//--------------------------------------------------------------------

}

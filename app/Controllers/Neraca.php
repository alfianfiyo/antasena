<?php namespace App\Controllers;

class Neraca extends BaseController
{
	public function index()
	{
		$data =[
			'Dashboard' => false,	
			'title' =>'Laporan Neraca'
		];

		return view('pages/neraca/index',$data);
	}

	//--------------------------------------------------------------------

}

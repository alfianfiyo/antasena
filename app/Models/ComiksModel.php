<?php namespace App\Models;

use CodeIgniter\Model;

class ComiksModel extends Model
{
	protected $table ='comiks';
	protected $useTimestamps = true;
	// untuk memperbolehkan field yang di isi manual
	protected $allowedFields =['judul','slug','penulis','penerbit','sampul'];

	public function getComiks($slug= false)
	{
		if($slug== false){
			return $this->findAll();
		}

		return $this->where(['slug' => $slug])->first();
	}
}
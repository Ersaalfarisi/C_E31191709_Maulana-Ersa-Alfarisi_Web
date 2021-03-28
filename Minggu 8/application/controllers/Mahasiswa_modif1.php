<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mahasiswa_modif1 extends CI_Controller {
	function _construct () {
		parent::_construct();
		$this -> load -> model ('Mahasiswa_model');
	}
	public function index(){
		$data['Mahasiswa'] = [
			["nama"=>"Kim Jefry","prodi"=>"MIF"],
			["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
			["nama"=>"Budi Sudarsono","prodi"=>"TIF"] 
		];
		$this -> load -> view('view_mahasiswa1',$data);
	}
	public function profil () {
		echo "ini adalah method profil pada controller Mahasiswa";
	}
}

?>

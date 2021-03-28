<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	function _construct () {
		parent::_construct();
		$this -> load -> model ('Mahasiswa_model');
	}
	public function index () {
		$data['nama'] = "Kim Jefry";
		$data['prodi'] = "MIF";
		$this -> load -> view ('view_mahasiswa',$data);
	}
	public function profil () {
		echo "ini adalah method profil pada controller Mahasiswa";
	}
}

?>
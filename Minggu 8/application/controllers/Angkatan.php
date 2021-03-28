<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Angkatan extends CI_Controller {
	function _construct () {
		parent::_construct();
		$this -> load -> model ('Mahasiswa_model');
	}
	public function index(){

		$this -> load -> view('view_angkatan');
	}
	public function profil () {
		echo "ini adalah method profil pada controller Mahasiswa";
	}
}

?>
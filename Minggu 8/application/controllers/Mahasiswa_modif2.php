<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mahasiswa_modif2 extends CI_Controller {
	function _construct () {
		parent::_construct();
		$this -> load -> model ('Mahasiswa_model');
	}
	public function index(){
		$data['Mahasiswa'] = $this -> Mahasiswa_model -> get_data();
		$this -> load -> view('view_mahasiswa2',$data);
	}
	public function profil () {
		echo "ini adalah method profil pada controller Mahasiswa";
	}
}

?>
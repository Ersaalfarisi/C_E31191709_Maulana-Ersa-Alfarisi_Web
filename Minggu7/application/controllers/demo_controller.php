<?php 
class demo_con extends CI_Controller {
	function index(){
		echo "<h2>demo controller</h2>";
		echo "<br>function yang di panggil adalah index";
	}
	public function aksi(){
		echo "<h2>demo controller</h2>";
		echo "<br>function yang di panggil adalah aksi";
	}
}
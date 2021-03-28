<?php 

class Demo1 extends CI_controller{
    public function index(){
        $this->load->view("LPview/headerview");
        $this->load->view("LPview/contentview");
        $this->load->view("LPview/footerview");
    }

}
?>
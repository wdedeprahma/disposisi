<?php

defined('BASEPATH') OR exit ('no direct script access allowed');
class Menu extends CI_Controller {
    public function index(){
   {
       $data = array(
           'content' => 'dashboard/index.php'
       );
   }
        $this->load->view('admin/template/menu',$data);

    }
}
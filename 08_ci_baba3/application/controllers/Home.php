<?php 

class Home extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('ProductModel');

    }

    public function index() {
        $data["layout"] = "home_layout";
        $data["productdata"] = $this->ProductModel->getProduct();
        $this->load->view ("main", $data);
    }



}
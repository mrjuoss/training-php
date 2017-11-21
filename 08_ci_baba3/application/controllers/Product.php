<?php

class Product extends CI_Controller {

    public function __construct () {

        parent::__construct();
        
        $this->load->model('ProductModel');
    }

    public function index () {

        $data['layout'] = 'home_layout';

        $this->load->view('main', $data);
    }

    public function getDetail ( $product_id ) {

        $data['layout'] = 'product_detail_layout';

        $data['productdata'] = $this->ProductModel->getProductDetail ( $product_id );

        $this->load->view('main', $data);
    }
}
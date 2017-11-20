<?php 

class Perulangan extends CI_Controller {

    public function index () {
        echo "Hello";
    }

    public function ulang ($jumlah = null) {

        $data['jumlah'] = $jumlah;

        $this->load->view ('perulangan_view', $data);
    }
}
<?php

class HelloCI extends CI_Controller {

    public function index () {
       $this->load->view ('hello_ci3');
    }

    public function sayHi ($nama = null) {
        $data['nama'] = $nama;

        $this->load->view ('hello_ci3', $data);
    }
}
<?php 

class ProductModel extends CI_Model {

    public function __construct () {
        parent::__construct ();

        $this->load->database();
    }


    public function getProduct () {

        $sql = "SELECT * FROM product_tbl";

        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function getProductDetail ( $product_id ) {

        $sql = "SELECT * FROM product_tbl WHERE product_id = ".$product_id ;

        $query = $this->db->query($sql);

        return $query->row ();
    }
}
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_models extends CI_Model
{
    // Get Product
    function getProduct($type = null)
    {
        // Check type 
        if ($type != null) {
            return $this->db->get_where('product',array('product_category'=>$type));
        } else {
            return $this->db->get('product');
        }
    }

    // Get Product by id
    function getProductId($id)
    {
        // get detail
        return $this->db->get_where('product', array('id' => $id))->row_array();
        
    }

    // Get all category
    function getCategory()
    {
        // get detail
        return $this->db->get('category')->result_array();
    }

    // Get all product by category
    function getProductCategori($id)
    {
        // get detail
        return $this->db->get_where('product', array('product_category' => $id))->result_array();
    }
}

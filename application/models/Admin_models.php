<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_models extends CI_Model
{
    // Get All Book
    function addProduct($input)
    {
        $this->db->insert('product', $input);
    }
}

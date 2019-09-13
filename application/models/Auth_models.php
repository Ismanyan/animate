<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_models extends CI_Model
{
    function checkAccount($input)
    {
        $this->db->where('username', $input['username']);
        $result = $this->db->get('users', 1);
        return $result;
    }

    function checkAvailable($input)
    {
        $this->db->where('username', $input['username']);
        $this->db->or_where('email', $input['email']);
        $result = $this->db->get('users');
        return $result->num_rows();
    }

    function addAccount($input)
    {
        $data=[
            'id' => null,
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => password_hash($input['password'], PASSWORD_DEFAULT),
            'role_id' => 'c0460cea97c9ebbb3f7fdb182a2117e4',
            'update_at' => null,
            'created_at' => null
        ];

        $this->db->insert('users',$data);
    }
}

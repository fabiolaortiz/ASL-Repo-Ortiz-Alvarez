<?php
/**
 * Created by PhpStorm.
 * User: FabiolaOrtiz
 * Date: 6/11/17
 */

class insert_data extends CI_Model {

    public function insert($data)
    {
        $this->load->database();
        $this->db->insert('users', $data);
    }
}
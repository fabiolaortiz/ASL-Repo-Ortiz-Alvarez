<?php
/**
 * Created by PhpStorm.
 * User: FabiolaOrtiz
 * Date: 6/11/17
 */

class insert_data extends CI_Model {

    public function get_records()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function insert_record($data)
    {
        $this->db->insert('users', $data);
        return;
    }
}
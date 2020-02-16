<?php

class Lab_model extends CI_Model
{

    public function get_labs_all()
    {
        $query = $this->db->get('labs');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_labs_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('labs');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_labs($data)
    {
        $this->db->insert('labs', $data);

        return $this->db->insert_id();
    }

    public function update_labs_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('labs', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_labs_by_id($id)
    {
        return $this->db->where('id', $id)->delete('labs');
    }
}

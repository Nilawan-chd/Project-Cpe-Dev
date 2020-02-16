<?php

class Page_model extends CI_Model
{

    public function get_pages_all()
    {
        $query = $this->db->get('pages');

        return $query->num_rows() > 0 ? $query->result() : false;
    }

    public function get_pages_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('pages');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_pages($data)
    {
        $this->db->insert('pages', $data);

        return $this->db->insert_id();
    }

    public function update_pages_by_id($id, $data)
    {
        echo $this->db->where('id', $id)->update('pages', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_pages_by_id($id)
    {
        return $this->db->where('id', $id)->delete('pages');
    }
}

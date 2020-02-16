<?php

class Sub_page_model extends CI_Model
{

    public function get_sub_pages_all()
    {
        $query = $this->db->get('sub_pages');

        return $query->num_rows() > 0 ? $query->result() : false;
    }

    public function get_sub_pages_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('sub_pages');

        return $query->num_rows() > 0 ? $query->row() : false;
    }
    public function get_sub_pages_by_page_id($page_id)
    {
        $query = $this->db->where('page_id', $page_id)->get('sub_pages');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_sub_pages($data)
    {
        $this->db->insert('sub_pages', $data);

        return $this->db->insert_id();
    }

    public function update_sub_pages_by_id($id, $data)
    {
        echo $this->db->where('id', $id)->update('sub_pages', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_sub_pages_by_id($id)
    {
        return $this->db->where('id', $id)->delete('sub_pages');
    }
}

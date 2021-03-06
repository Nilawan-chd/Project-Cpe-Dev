<?php

class Banner_model extends CI_Model
{

    public function get_banner_all()
    {
        $query = $this->db->order_by('sort', 'asc')->get('banners');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_banner_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('banners');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function insert_banner($data)
    {
        $this->db->insert('banners', $data);

        return $this->db->insert_id();
    }

    public function update_banner_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('banners', $data);

        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function delete_banner_by_id($id)
    {
        return $this->db->where('id', $id)->delete('banners');
    }
}

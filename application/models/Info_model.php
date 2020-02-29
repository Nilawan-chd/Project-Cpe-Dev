<?php

class Info_model extends CI_Model
{

    public function get_info_all()
    {
        $query = $this->db->order_by('sort', 'asc')->get('info');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_info_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('info');

        return $query->num_rows() > 0 ? $query->row() : [];
    }

    public function insert_info($data)
    {
        $this->db->insert('info', $data);

        return $this->db->insert_id();
    }

    public function update_info_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('info', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_info_by_id($id)
    {
        return $this->db->where('id', $id)->delete('info');
    }
}

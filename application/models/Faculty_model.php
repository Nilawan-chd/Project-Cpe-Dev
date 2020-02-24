<?php

class Faculty_model extends CI_Model
{

    public function get_faculty_all()
    {
        $query = $this->db->get('faculty');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_faculty_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('faculty');

        return $query->num_rows() > 0 ? $query->row() : [];
    }

    public function insert_faculty($data)
    {
        $this->db->insert('faculty', $data);

        return $this->db->insert_id();
    }

    public function update_faculty_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('faculty', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_faculty_by_id($id)
    {
        return $this->db->where('id', $id)->delete('faculty');
    }
}

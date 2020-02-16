<?php

class Project_model extends CI_Model
{

    public function get_project_all()
    {
        $query = $this->db->order_by('sort', 'asc')->get('project');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_project_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('project');

        return $query->num_rows() > 0 ? $query->row() : [];
    }

    public function insert_project($data)
    {
        $this->db->insert('project', $data);

        return $this->db->insert_id();
    }

    public function update_project_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('project', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_project_by_id($id)
    {
        return $this->db->where('id', $id)->delete('project');
    }
}

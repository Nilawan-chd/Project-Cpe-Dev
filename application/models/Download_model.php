<?php

class Download_model extends CI_Model
{

    public function get_download_all()
    {
        $query = $this->db->get('downloads');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_download_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('downloads');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function get_download_by_category_download_id($category_id)
    {
        $this->db->select('
            downloads.*,
            category_downloads.title as category_downloads_name
            
        ');
        $this->db->from('downloads');
        $this->db->join('category_downloads', 'category_downloads.id = downloads.category_downloads_id');
        $this->db->where('downloads.category_downloads_id', $category_id);

        $query = $this->db->get();

        return $query->num_rows() > 0 ? $query->result() : [];
    }


    public function insert_download($data)
    {
        $this->db->insert('downloads', $data);

        return $this->db->insert_id();
    }

    public function update_download_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('downloads', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_download_by_id($id)
    {
        return $this->db->where('id', $id)->delete('downloads');
    }
}

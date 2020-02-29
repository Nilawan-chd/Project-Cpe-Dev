<?php

class Category_download_model extends CI_Model
{

    public function get_category_download_all()
    {
        $query = $this->db->get('category_downloads');

        return $query->num_rows() > 0 ? $query->result() : [];
    }
    public function get_category_download_and_count_all()
    {
        $sql = "
			SELECT  category_downloads.id, 
					category_downloads.title, 
					category_downloads.created_at, 
					COUNT(downloads.id) AS counter
			FROM category_downloads
			LEFT JOIN downloads ON category_downloads.id = downloads.category_downloads_id
			GROUP BY category_downloads.id
        ";

        $query = $this->db->query($sql);

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_category_download_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('category_downloads');

        return $query->num_rows() > 0 ? $query->row() : [];
    }

    public function insert_category_download($data)
    {
        $this->db->insert('category_downloads', $data);

        return $this->db->insert_id();
    }

    public function update_category_download_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('category_downloads', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_category_download_by_id($id)
    {
        return $this->db->where('id', $id)->delete('category_downloads');
    }
}

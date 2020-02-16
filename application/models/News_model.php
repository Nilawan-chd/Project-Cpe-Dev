<?php

class News_model extends CI_Model
{

    public function get_news_all()
    {
        $query = $this->db->get('news');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_news_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('news');

        return $query->num_rows() > 0 ? $query->row() : [];
    }

    public function get_news_by_category_news_id($category_id)
    {
        $this->db->select('
            news.*,
            category_news.title as category_news_name
            
        ');
        $this->db->from('news');
        $this->db->join('category_news', 'category_news.id = news.category_news_id');
        $this->db->where('news.category_news_id', $category_id);

        $query = $this->db->get();

        return $query->num_rows() > 0 ? $query->result() : [];
    }


    public function insert_news($data)
    {
        $this->db->insert('news', $data);

        return $this->db->insert_id();
    }

    public function update_news_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('news', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_news_by_id($id)
    {
        return $this->db->where('id', $id)->delete('news');
    }
}

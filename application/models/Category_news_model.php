<?php

class Category_news_model extends CI_Model
{

    public function get_category_news_all()
    {
        $query = $this->db->get('category_news');

        return $query->num_rows() > 0 ? $query->result() : [];
    }
    public function get_category_news_and_count_all()
    {
        $sql = "
			SELECT  category_news.id, 
					category_news.title, 
					category_news.created_at, 
					COUNT(news.id) AS counter
			FROM category_news
			LEFT JOIN news ON category_news.id = news.category_news_id
			GROUP BY category_news.id
        ";

        $query = $this->db->query($sql);

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_category_news_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('category_news');

        return $query->num_rows() > 0 ? $query->row() : [];
    }

    public function insert_category_news($data)
    {
        $this->db->insert('category_news', $data);

        return $this->db->insert_id();
    }

    public function update_category_news_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('category_news', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_category_news_by_id($id)
    {
        return $this->db->where('id', $id)->delete('category_news');
    }
}

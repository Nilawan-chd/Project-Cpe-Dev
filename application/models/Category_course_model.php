<?php

class Category_course_model extends CI_Model
{

    public function get_category_course_all()
    {
        $query = $this->db->get('category_course');

        return $query->num_rows() > 0 ? $query->result() : [];
    }
    public function get_category_course_and_count_all()
    {
        $sql = "
			SELECT  category_course.id, 
					category_course.title, 
					category_course.created_at, 
					COUNT(course.id) AS counter
			FROM category_course
			LEFT JOIN course ON category_course.id = course.category_course_id
			GROUP BY category_course.id
        ";

        $query = $this->db->query($sql);

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_category_course_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('category_course');

        return $query->num_rows() > 0 ? $query->row() : [];
    }

    public function insert_category_course($data)
    {
        $this->db->insert('category_course', $data);

        return $this->db->insert_id();
    }

    public function update_category_course_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('category_course', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_category_course_by_id($id)
    {
        return $this->db->where('id', $id)->delete('category_course');
    }
}

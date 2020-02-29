<?php

class Category_course_model extends CI_Model
{

    public function get_category_course_all()
    {
        $query = $this->db->get('category_courses');

        return $query->num_rows() > 0 ? $query->result() : [];
    }
    public function get_category_course_and_count_all()
    {
        $sql = "
			SELECT  category_courses.id, 
					category_courses.title, 
					category_courses.created_at, 
					COUNT(course.id) AS counter
			FROM category_courses
			LEFT JOIN course ON category_courses.id = course.category_course_id
			GROUP BY category_courses.id
        ";

        $query = $this->db->query($sql);

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_category_course_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('category_courses');

        return $query->num_rows() > 0 ? $query->row() : [];
    }

    public function insert_category_course($data)
    {
        $this->db->insert('category_courses', $data);

        return $this->db->insert_id();
    }

    public function update_category_course_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('category_courses', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_category_course_by_id($id)
    {
        return $this->db->where('id', $id)->delete('category_courses');
    }
}

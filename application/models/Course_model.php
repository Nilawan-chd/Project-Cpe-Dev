<?php

class Course_model extends CI_Model
{

    public function get_course_all()
    {
        $query = $this->db->get('course');

        return $query->num_rows() > 0 ? $query->result() : [];
    }

    public function get_course_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('course');

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function get_course_by_category_course_id($category_id)
    {
        $this->db->select('
            course.*,
            category_courses.title as category_courses_name
            
        ');
        $this->db->from('course');
        $this->db->join('category_courses', 'category_courses.id = course.category_course_id');
        $this->db->where('course.category_course_id', $category_id);

        $query = $this->db->get();

        return $query->num_rows() > 0 ? $query->result() : [];
    }


    public function insert_course($data)
    {
        $this->db->insert('course', $data);

        return $this->db->insert_id();
    }

    public function update_course_by_id($id, $data)
    {
        $this->db->where('id', $id)->update('course', $data);

        return $this->db->affected_rows() > 0 ? true : [];
    }

    public function delete_course_by_id($id)
    {
        return $this->db->where('id', $id)->delete('course');
    }
}

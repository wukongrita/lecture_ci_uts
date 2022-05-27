<?php

/**
 * Student
 */
class Student_model extends CI_Model
{

    function all()
    {
        // get all data from table students
        $query = $this->db->get('students');
        $result = $query->result();

        return $result;
    }

    function find()
    {
        // find specific data from table Student
    }

    function save($data = null)
    {
        // save specific data from table Student
        return $this->db->insert('students', [
            'id' => $data['id'],
            'name' => $data['name'],
            'gender' => $data['gender'],
            'birth_date' => $data['birth_date'],
            'birth_place' => $data['birth_place'],
            'address' => $data['address'],
            'is_active' => $data['is_active'],
        ]);
    }

    function update()
    {
        // update specific data from table Student
    }

    function delete()
    {
        // delete specific data from table Student
    }


}

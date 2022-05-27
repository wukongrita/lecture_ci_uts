<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Student Controller
 */
class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('Student_model');
    }

    public function index()
    {
        $data['judul'] = 'Student List';
        $data['students'] = $this->Student_model->all();

        $this->load->view('student/list', $data);
    }

    public function new()
    {
        $data['judul'] = 'New Student';

        $this->load->view('student/form', $data);
    }

    public function save()
    {
        $result = $this->Student_model->save($this->input->post());

        $data['judul'] = 'New Student';
        $data['message'] = 'Insert Success!';

        $this->load->view('student/form', $data);
    }
}

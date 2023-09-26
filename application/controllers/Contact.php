<?php


class Contact extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Contact';
        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar');
        $this->load->view('contact/index');
        $this->load->view('template/home_footer');
    }
}

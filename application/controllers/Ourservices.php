<?php


class Ourservices extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Our Services';
        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar');
        $this->load->view('ourservices/index');
        $this->load->view('template/home_footer');
    }
}

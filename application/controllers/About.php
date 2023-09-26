<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Mabout'); // Load SiswaModel ke controller ini
    }
    public function index()
    {

        $data['legalistas'] = $this->Mabout->view();
        $data['legalistassatu'] = $this->Mabout->viewabaout();
        $data['legalistasdua'] = $this->Mabout->viewaboutsesdua();

        $data['judul'] = 'Profile Perusahaan';
        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar');
        $this->load->view('about/index', $data);
        $this->load->view('template/home_footer');
    }
    public function struktur()
    {
        $data['judul'] = 'Struktur organisasi';
        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar');
        $this->load->view('about/struktur');
        $this->load->view('template/home_footer');
    }
}

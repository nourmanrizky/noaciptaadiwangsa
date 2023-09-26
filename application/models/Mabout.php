<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mabout extends CI_Model {
	// Fungsi untuk menampilkan semua data siswa
	public function view(){
		return $this->db->get('legalistas')->result();
	}
	public function viewabaout(){
		return $this->db->get('about')->result();
	}
	public function viewaboutsesdua(){
		return $this->db->get('aboutsesdua')->result();
	}

}
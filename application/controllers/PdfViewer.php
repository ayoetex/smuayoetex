<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load helper untuk URL dan session
        $this->load->helper('url');
        $this->load->library('session');

        // Cek jika user belum login
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function view()
    {
        // Mengecek apakah user adalah admin
        $data['is_admin'] = $this->session->userdata('role') === 'admin';

        // Load view PDF
        $this->load->view('pdf_viewer', $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen extends CI_Controller
{
    public function manualmutu()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);

        $data['title'] = 'Manual Mutu SNI';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/manualmutu', ['isAdmin' => $isAdmin]);
        $this->load->view('templates/footer');
    }

    public function MR()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu MR';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/MR', $data);
        $this->load->view('templates/footer');
    }

    public function followup()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu Follow Up';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/followup', $data);
        $this->load->view('templates/footer');
    }

    public function ppic()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu PPIC';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/ppic', $data);
        $this->load->view('templates/footer');
    }

    public function rajut()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu Rajut';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/rajut', $data);
        $this->load->view('templates/footer');
    }

    public function gbenang()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu G. Benang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/gdbenang', $data);
        $this->load->view('templates/footer');
    }

    public function ggreige()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu G. Greige';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/gdgreige', $data);
        $this->load->view('templates/footer');
    }

    public function gchemical()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu G. Chemical';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/gdchemical', $data);
        $this->load->view('templates/footer');
    }

    public function gsparepart()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu G. SP';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/gdsparepart', $data);
        $this->load->view('templates/footer');
    }

    public function gfinishgood()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu G. FG';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/gdfinishgood', $data);
        $this->load->view('templates/footer');
    }

    public function processingdua()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu P2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/processingdua', $data);
        $this->load->view('templates/footer');
    }

    public function processingsatu()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu P1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/processingsatu', $data);
        $this->load->view('templates/footer');
    }

    public function lab()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu Lab';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/lab', $data);
        $this->load->view('templates/footer');
    }

    public function purchasing()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu Purcha';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/purchasing', $data);
        $this->load->view('templates/footer');
    }

    public function MT()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu MT';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/MT', $data);
        $this->load->view('templates/footer');
    }

    public function IT()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu IT';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/IT', $data);
        $this->load->view('templates/footer');
    }

    public function qualitycontrol()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu Quality Control';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/qualitycontrol', $data);
        $this->load->view('templates/footer');
    }

    public function ekspedisi()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu Ekspedisi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/ekspedisi', $data);
        $this->load->view('templates/footer');
    }

    public function utilityipal()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu Utility Ipal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/utilityipal', $data);
        $this->load->view('templates/footer');
    }

    public function utilityteknik()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu Uty Teknik';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/utilityteknik', $data);
        $this->load->view('templates/footer');
    }

    public function SDM()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu SDM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/SDM', $data);
        $this->load->view('templates/footer');
    }

    public function generalaffair()
    {
        // Ambil user role dari session
        $userRole = $this->session->userdata('user_role');


        // Tentukan apakah user adalah admin
        $isAdmin = ($userRole == 1);
        $data['title'] = 'Prosedur Mutu General Affair';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/generalaffair', $data);
        $this->load->view('templates/footer');
    }
}

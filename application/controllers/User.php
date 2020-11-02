<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = ':: SIP Desa Munduk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tempatWisata'] = $this->db->get('tb_tempatwisata')->result_array();

        $this->load->view('pengunjung/template/header', $data);
        $this->load->view('pengunjung/template/navbar', $data);
        $this->load->view('pengunjung/index', $data);
        $this->load->view('pengunjung/template/footer');
    }

    public function userLogin()
    {
        $data['title'] = ':: SIP Desa Munduk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tempatWisata'] = $this->db->get('tb_tempatwisata')->result_array();


        $this->load->view('pengunjung/template/header_userLogin', $data);
        $this->load->view('pengunjung/template/navbar_userLogin', $data);
        $this->load->view('pengunjung/userLogin', $data);
        $this->load->view('pengunjung/template/footer_userLogin');
    }

    public function formTransaksi()
    {
        $data['title'] = ':: SIP Desa Munduk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['guide'] = $this->db->get('tb_guide')->result_array();

        $this->load->view('pengunjung/template/header_userLogin', $data);
        $this->load->view('pengunjung/template/navbar_userLogin', $data);
        $this->load->view('pengunjung/formTransaksi', $data);
        $this->load->view('pengunjung/template/footer_userLogin');
    }

    public function insertTrans()
    {
        echo $this->input->post('keterangan');
    }
}

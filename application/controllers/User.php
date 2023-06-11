<?php

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
    }

    //function buat daftar
    public function daftar()
    {
        $data['title'] = 'Daftar';
        
        //rules
        $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'required',
        [
            'required' => 'Nama Lengkap Wajib Diisi'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|callback_cek_username',
        [
            'cek_username' => 'Username Sudah Terdaftar',
            'required' => 'Username Wajib Diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[30]',
        [
            'min_length' => 'Minimal Password 6 Karakter',
            'max_length' => 'Maximal Password 30 Karakter',
            'required' => 'Password Wajib Diisi'
        ]);

        //logika jika gagal mendaftar dan jika berhasil mendaftar
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('daftar');
        } else {
            $enskripsi = md5($this->input->post('password'));

            $this->user_model->register($enskripsi);

            $this->session->set_flashdata('register_success', 'Selamat Anda Sudah Terdaftar!!');
            redirect('user/login');
        }
    }

    public function cek_username($username)
    {
        $superman = $this->db->get_where('user', array('username' => $username));

        if (empty($superman->row_array())) {
            return true;
        } else {
            return false;
        }
    }

    public function login()
    {
        //validasi 2 data (username & password)
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        //jika validasi salah
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            //get username & password
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $data = $this->user_model->login($username, $password);

            //membuat session baru
            if ($data) {
                $timothy = array(
                    'id_user' => $data,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($timothy);
                $this->session->set_flashdata('berhasil_login', 'Anda Berhasil Login!!');
                redirect('barang');
            } else {
                //jika gagal login
                $this->session->set_flashdata('gagal_login', 'Username dan Password Anda Salah');
                redirect('user/login');
            }
        }
    }

    public function logout()
    {
        //unset isi userdata
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        // $this->session->session_destroy(); (cara cepat)

        //menampilkan pesan berhasil logout
        $this->session->set_flashdata('user_logout', 'Anda Berhasil Logout');
        redirect('user/login');
    }
}
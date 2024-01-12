<?php
 class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login/form_login');
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $cek = $this->Login_model->cek_admin($username, $password)->num_rows();
        
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);

            // Redirect to Home controller's index method
            redirect('Crud_produk');
        } else {
            echo "Username dan password salah!";
        }
    }

    public function logout()
    {
        // Unset user session data
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('status');

        // Redirect to the login page
        redirect('home');
    }
}

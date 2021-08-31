<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        // panggil construct parent
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
        $this->form_validation->set_rules("password", "Password", "required|trim");
        if ($this->form_validation->run() == false) {
            $data['title'] = "User Login";
            $this->load->view("templates/auth_header", $data);
            $this->load->view("auth/login");
            $this->load->view("templates/auth_footer");
        } else {
            $this->_login();
        }
    }

    public function register()
    {
        $this->form_validation->set_rules("name", "Name", "required|trim");
        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[users.email]", [
            'is_unique' => "This email already registered"
        ]);
        $this->form_validation->set_rules("password1", "Password", "required|trim|min_length[6]|matches[password2]");
        $this->form_validation->set_rules("password2", "Confirm Password", "required|trim|matches[password1]");

        // jika validasi salah
        if ($this->form_validation->run() == false) {
            $data['title'] = "User Registration";
            $this->load->view("templates/auth_header", $data);
            $this->load->view("auth/register");
            $this->load->view("templates/auth_footer");
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Congratulation, Your Account have been created. Please Login</div>');
            redirect('auth');
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        // cek kalau user ada
        if ($user) {
            // cek kalau user active
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Wrong password</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Email is not been activated</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Email is not registered</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">You have been logout</div>');
        redirect('auth');
    }
}

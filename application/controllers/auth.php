<?php

class Auth extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('temp_customer/header', $data);
        $this->load->view('customer/dashboard');
        $this->load->view('temp_customer/footer');
    }
    public function form_login()
    {
        $data['title'] = 'Form Login';
        $this->_rules();

        if ($this->form_validation->run() == false) {

            $this->load->view('temp_admin/header', $data);
            $this->load->view('form_login');
            $this->load->view('temp_admin/footer');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->rent_model->cek_login($username, $password);
            if ($cek == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show">Username atau Password Salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('auth');
            } else {
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('n_cust', $cek->n_cust);
                $this->session->set_userdata('id_cust', $cek->id_cust);

                switch ($cek->role_id) {
                    case 1:
                        redirect('admin/dashboard');
                        break;
                    case 2:
                        redirect('customer/dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'username Wajib Diisi']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password Wajib Diisi']);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }

    public function ubah_pass()
    {
        $data['title'] = 'Form Ubah Password';

        $this->load->view('temp_admin/header', $data);
        $this->load->view('ubah_pass');
        $this->load->view('temp_admin/footer');
    }

    public function aksi()
    {
        $passb = $this->input->post('passb');
        $passc = $this->input->post('passc');

        $this->form_validation->set_rules('passb', 'passb', 'required|matches[passc]', ['matches' => 'Maaf Password yang anda masukkan tidak sama, silahkan ulangi lagi', 'required' => 'Password Baru Harus Diisi']);
        $this->form_validation->set_rules('passc', 'passc', 'required', ['required' => 'Confirm Password Wajib Diisi']);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Ubah Password';

            $this->load->view('temp_admin/header', $data);
            $this->load->view('ubah_pass');
            $this->load->view('temp_admin/footer');
        } else {
            $data = array('password' => md5($passb));
            $id   = array('id_cust' => $this->session->userdata('id_cust'));

            $this->rent_model->update_pass($id, $data, 'customer');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show">Password Berhasil Di Ubah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }
}

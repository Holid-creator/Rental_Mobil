<?php

class Register extends CI_Controller
{
    public function index()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {

            $data['title'] = 'Form Register';

            $this->load->view('temp_admin/header', $data);
            $this->load->view('register');
            $this->load->view('temp_admin/footer');
        } else {

            $n_cust = $this->input->post('n_cust');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $gender = $this->input->post('gender');
            $telp = $this->input->post('telp');
            $ktp = $this->input->post('ktp');
            $password = md5($this->input->post('password'));
            $role_id = '2';

            $data = array(
                'n_cust' => $n_cust,
                'username' => $username,
                'alamat' => $alamat,
                'gender' => $gender,
                'telp' => $telp,
                'ktp' => $ktp,
                'password' => $password,
                'role_id' => $role_id
            );

            $this->rent_model->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show">Berhasil Register, Silahkan Login<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth/form_login');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('n_cust', 'n_cust', 'required', ['required' => 'Nama Wajib Wajib Diisi']);
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username Wajib Diisi']);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', ['required' => 'Alamat Wajib Diisi']);
        $this->form_validation->set_rules('gender', 'gender', 'required', ['required' => 'Gender Wajib Diisi']);
        $this->form_validation->set_rules('telp', 'telp', 'required', ['required' => 'No. Telepon Wajib Diisi']);
        $this->form_validation->set_rules('ktp', 'ktp', 'required', ['required' => 'KTP Wajib Diisi']);
        $this->form_validation->set_rules('password', 'passord', 'required', ['required' => 'Password Wajib Diisi']);
    }
}

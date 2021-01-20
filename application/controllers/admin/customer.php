<?php

class Customer extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Data Customer';
        $data['customer'] = $this->rent_model->get_data('customer')->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/customer');
        $this->load->view('temp_admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Customer';
        $data['customer'] = $this->rent_model->get_data('customer')->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/tambah_customer', $data);
        $this->load->view('temp_admin/footer');
    }

    public function aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {

            $n_cust   = $this->input->post('n_cust');
            $username = $this->input->post('username');
            $alamat   = $this->input->post('alamat');
            $gender   = $this->input->post('gender');
            $telp     = $this->input->post('telp');
            $ktp      = $this->input->post('ktp');
            $password = md5($this->input->post('password'));

            $data = array(
                'n_cust'   => $n_cust,
                'username' => $username,
                'alamat'   => $alamat,
                'gender'   => $gender,
                'telp'     => $telp,
                'ktp'      => $ktp,
                'password' => $password

            );

            $this->rent_model->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Customer Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/customer');
        }
    }

    public function update($id)
    {
        $where = array('id_cust' => $id);
        $data['title'] = 'Form Update Customer';
        $data['customer'] = $this->db->query("SELECT * FROM customer WHERE id_cust = '$id'")->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/update_cust', $data);
        $this->load->view('temp_admin/footer');
    }

    public function update_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->update();
        } else {
            $id       = $this->input->post('id_cust');
            $n_cust   = $this->input->post('n_cust');
            $username = $this->input->post('username');
            $alamat   = $this->input->post('alamat');
            $gender   = $this->input->post('gender');
            $telp     = $this->input->post('telp');
            $ktp      = $this->input->post('ktp');
            $password = md5($this->input->post('password'));

            $data = array(
                'n_cust' => $n_cust,
                'username' => $username,
                'alamat' => $alamat,
                'gender' => $gender,
                'telp' => $telp,
                'ktp' => $ktp,
                'password' => $password
            );

            $where = array('id_cust' => $id);

            $this->rent_model->update_data('customer', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Customer Berhasil DiUpdate
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/customer');
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

    public function hapus($id)
    {
        $where = array('id_cust' => $id);

        $this->rent_model->hapus($where, 'customer');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Customer Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/customer');
    }
}

<?php

class Data_tipe extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Type Mobil';
        $data['tipe'] = $this->rent_model->get_data('tipe')->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/tipe_mobil', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Type Mobil';
        $data['tipe'] = $this->rent_model->get_data('tipe')->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/tambah_tipe', $data);
        $this->load->view('temp_admin/footer');
    }

    public function aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {

            $k_tipe = $this->input->post('k_tipe');
            $n_tipe = $this->input->post('n_tipe');

            $data = array(
                'k_tipe' => $k_tipe,
                'n_tipe' => $n_tipe
            );

            $this->rent_model->insert_data($data, 'tipe');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Type Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/data_tipe');
        }
    }

    public function update($id)
    {
        $where = array('id_tipe' => $id);
        $data['title'] = 'Form Update Type Mobil';
        $data['tipe'] = $this->db->query("SELECT * FROM tipe WHERE id_tipe = '$id'")->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/update_tipe', $data);
        $this->load->view('temp_admin/footer');
    }

    public function update_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->update();
        } else {
            $id = $this->input->post('id_tipe');
            $k_tipe = $this->input->post('k_tipe');
            $n_tipe = $this->input->post('n_tipe');


            $data = array(
                'k_tipe' => $k_tipe,
                'n_tipe' => $n_tipe
            );

            $where = array('id_tipe' => $id);

            $this->rent_model->update_data('tipe', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Type Berhasil DiUpdate
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/data_tipe');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('k_tipe', 'k_tipe', 'required', ['required' => 'Kode Type Wajib Diisi']);
        $this->form_validation->set_rules('n_tipe', 'n_tipe', 'required', ['required' => 'Nama Type Wajib Diisi']);
    }

    public function hapus($id)
    {
        $where = array('id_tipe' => $id);

        $this->rent_model->hapus($where, 'tipe');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Type Berhasil DiHapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/data_tipe');
    }
}

<?php

class Rental extends CI_Controller
{

    public function tambah_rental($id)
    {
        $data['title'] = 'Form Rental Mobil';
        $data['detail'] = $this->rent_model->ambil_id($id);

        $this->load->view('temp_customer/header', $data);
        $this->load->view('customer/tambah_rental', $data);
        $this->load->view('temp_customer/footer');
    }

    public function tambah_aksi()
    {
        $id_cust = $this->session->userdata('id_cust');

        $id_mobil = $this->input->post('id_mobil');
        $tgl_rent = $this->input->post('tgl_rent');
        $tgl_kem = $this->input->post('tgl_kem');
        $harga = $this->input->post('harga');
        $denda = $this->input->post('denda');

        $data = array(
            'id_cust' => $id_cust,
            'id_mobil' => $id_mobil,
            'tgl_rent' => $tgl_rent,
            'tgl_kem' => $tgl_kem,
            'harga' => $harga,
            'denda' => $denda,
            'tgl_peng' => '-',
            'st_peng' => 'Belum Kembali',
            'st_rent' => 'Belum Selesai',
            'total_denda' => '0'
        );

        $this->rent_model->insert_data($data, 'transaksi');
        $status = array('status' => '0');
        $id = array('id_mobil' => $id_mobil);
        $this->rent_model->update_data('mobil', $status, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Transaksi Berhasil, Silahkan Checkout
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('customer/data_mobil');
    }
}

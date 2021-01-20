<?php

class Transaksi extends CI_Controller
{

    public function index()
    {

        $data['title'] = 'Data Transaksi';
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil AND tr.id_cust = cs.id_cust")->result();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/transaksi', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pembayaran($id)
    {
        $data['title'] = 'Form Pembayaran';
        $where = array('id_rental' => $id);
        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental = '$id'")->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/konfirmasi_pem', $data);
        $this->load->view('temp_admin/footer');
    }

    public function cek_pem()
    {
        $id = $this->input->post('id_rental');
        $st_pem = $this->input->post('st_pem');

        $data = array('st_pem' => $st_pem);

        $where = array('id_rental' => $id);

        $this->rent_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil DiKonfirmasi
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/transaksi');
    }

    public function download_pem($id)
    {
        $this->load->helper('download');
        $file_pem = $this->rent_model->download_pem($id);
        $file = 'assets/upload/' . $file_pem['bukti_pem'];

        force_download($file, null);
    }

    public function trans_selesai($id)
    {
        $data['title'] = 'Transaksi Selesai';
        $where = array('id_rental' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental = '$id'")->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/trans_selesai', $data);
        $this->load->view('temp_admin/footer');
    }

    public function trans_slaksi()
    {

        $id = $this->input->post('id_rental');
        $tgl_kem = $this->input->post('tgl_kem');
        $denda = $this->input->post('denda');
        $tgl_peng = $this->input->post('tgl_peng');
        $st_peng = $this->input->post('st_peng');
        $st_rent = $this->input->post('st_rent');

        $x = strtotime($tgl_peng);
        $z = strtotime($tgl_kem);
        $selisih = abs($x - $z) / (60 * 60 * 24);
        $total_denda = $selisih * $denda;
        // var_dump($total_denda);
        // die();

        $data = array(
            'tgl_peng' => $tgl_peng,
            'st_peng' => $st_peng,
            'st_rent' => $st_rent,
            'total_denda' => $total_denda
        );

        $where = array('id_rental' => $id);

        $this->rent_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Transaksi Berhasil DiUpdate
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/transaksi');
    }

    public function batal($id)
    {
        $where = array('id_rental' => $id);
        $data = $this->rent_model->get_where($where, 'transaksi')->row();

        $where2 = array('id_mobil' => $data->id_mobil);
        $data2 = array('status' => '1');

        $this->rent_model->update_data('mobil', $data2, $where2);
        $this->rent_model->hapus($where, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Transaksi Berhasil Dibatalkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/transaksi');
    }
}

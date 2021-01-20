<?php

class Laporan extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Filter Laporan Transaksi';
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $this->_rules();

        if ($this->form_validation->run() == false) {

            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar');
            $this->load->view('admin/filter_lap', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_cust=cs.id_cust AND date(tgl_rent) >= '$dari' AND date(tgl_rent) <= '$sampai'")->result();
            // var_dump($data);
            // die();

            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar');
            $this->load->view('admin/tampilkan_lap', $data);
            $this->load->view('temp_admin/footer');
        }
    }

    public function print_lap()
    {
        $data['title'] = 'Print Laporan Transaksi';
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_cust=cs.id_cust AND date(tgl_rent) >= '$dari' AND date(tgl_rent) >= '$sampai'")->result();
        // var_dump($dari);
        // die();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('admin/print_lap', $data);
    }

    public function _rules()
    {

        $this->form_validation->set_rules('dari', 'dari', 'required', ['required' => 'Tanggal Mulai Wajib Diisi']);
        $this->form_validation->set_rules('sampai', 'sampai', 'required', ['required' => 'Tanggal Sampai Wajib Diisi']);
    }
}

<?php

class Data_mobil extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Data Mobil';
        $data['mobil'] = $this->rent_model->get_data('mobil')->result();
        $this->load->view('temp_customer/header', $data);
        $this->load->view('customer/data_mobil', $data);
        $this->load->view('temp_customer/footer');
    }

    public function detail_mobil($id)
    {
        $data['title'] = 'Detail Mobil';
        $data['detail'] = $this->rent_model->ambil_id($id);

        $this->load->view('temp_customer/header', $data);
        $this->load->view('customer/detail_mobil', $data);
        $this->load->view('temp_customer/footer');
    }
}

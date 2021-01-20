<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['mobil'] = $this->rent_model->get_data('mobil')->result();
        $this->load->view('temp_customer/header', $data);
        $this->load->view('customer/dashboard', $data);
        $this->load->view('temp_customer/footer');
    }
}

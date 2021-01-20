<?php

class Data_mobil extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Data Mobil';
        $data['mobil'] = $this->rent_model->get_data('mobil')->result();
        $data['tipe'] = $this->rent_model->get_data('tipe')->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Input Data Mobil';
        $data['tipe'] = $this->rent_model->get_data('tipe')->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/tambah_mobil', $data);
        $this->load->view('temp_admin/footer');
    }

    public function aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {

            $k_tipe       = $this->input->post('k_tipe');
            $merk         = $this->input->post('merk');
            $plat         = $this->input->post('plat');
            $thn          = $this->input->post('thn');
            $warna        = $this->input->post('warna');
            $status       = $this->input->post('status');
            $harga        = $this->input->post('harga');
            $denda        = $this->input->post('denda');
            $ac           = $this->input->post('ac');
            $supir        = $this->input->post('supir');
            $mp3_player   = $this->input->post('mp3_player');
            $central_lock = $this->input->post('central_lock');
            $gambar       = $_FILES['gambar']['name'];

            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo 'Gambar Mobil Gagal DiUpload';
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'k_tipe' => $k_tipe,
                'merk' => $merk,
                'plat' => $plat,
                'thn' => $thn,
                'warna' => $warna,
                'status' => $status,
                'harga' => $harga,
                'denda' => $denda,
                'ac' => $ac,
                'supir' => $supir,
                'mp3_player' => $mp3_player,
                'central_lock' => $central_lock,
                'gambar' => $gambar
            );

            $this->rent_model->insert_data($data, 'mobil');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/data_mobil');
        }
    }

    public function update($id)
    {
        $where = array('id_mobil' => $id);
        $data['title'] = 'Form Update Mobil';
        $data['mobil'] = $this->db->query("SELECT * FROM mobil mb, tipe tp WHERE mb.k_tipe = tp.k_tipe AND mb.id_mobil = '$id'")->result();
        $data['tipe'] = $this->rent_model->get_data('tipe')->result();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/update_mobil', $data);
        $this->load->view('temp_admin/footer');
    }

    public function update_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->update();
        } else {
            $id = $this->input->post('id_mobil');
            $k_tipe = $this->input->post('k_tipe');
            $merk = $this->input->post('merk');
            $plat = $this->input->post('plat');
            $thn = $this->input->post('thn');
            $warna = $this->input->post('warna');
            $status = $this->input->post('status');
            $harga        = $this->input->post('harga');
            $denda        = $this->input->post('denda');
            $ac           = $this->input->post('ac');
            $supir        = $this->input->post('supir');
            $mp3_player   = $this->input->post('mp3_player');
            $central_lock = $this->input->post('central_lock');
            $gambar = $_FILES['gambar']['name'];

            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'k_tipe' => $k_tipe,
                'merk' => $merk,
                'plat' => $plat,
                'thn' => $thn,
                'warna' => $warna,
                'status' => $status,
                'harga' => $harga,
                'denda' => $denda,
                'ac' => $ac,
                'supir' => $supir,
                'mp3_player' => $mp3_player,
                'central_lock' => $central_lock
            );

            $where = array('id_mobil' => $id);

            $this->rent_model->update_data('mobil', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil DiUpdate
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/data_mobil');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('k_tipe', 'k_tipe', 'required', ['required' => 'Kode Type Wajib Diisi']);
        $this->form_validation->set_rules('merk', 'merk', 'required', ['required' => 'Merk Mobil Wajib Diisi']);
        $this->form_validation->set_rules('plat', 'plat', 'required', ['required' => 'Plat Mobil Wajib Diisi']);
        $this->form_validation->set_rules('thn', 'thn', 'required', ['required' => 'Tahun Wajib Diisi']);
        $this->form_validation->set_rules('warna', 'warna', 'required', ['required' => 'Wsarna Mobil Wajib Diisi']);
        $this->form_validation->set_rules('status', 'status', 'required', ['required' => 'Status Mobil Wajib Diisi']);
        $this->form_validation->set_rules('harga', 'harga', 'required', ['required' => 'Harga Mobil Wajib Diisi']);
        $this->form_validation->set_rules('denda', 'denda', 'required', ['required' => 'Denda Mobil Wajib Diisi']);
        $this->form_validation->set_rules('ac', 'ac', 'required', ['required' => 'AC Wajib Diisi']);
        $this->form_validation->set_rules('supir', 'supir', 'required', ['required' => 'Supir Wajib Diisi']);
        $this->form_validation->set_rules('mp3_player', 'mp3_player', 'required', ['required' => 'Mp3 Player Wajib Diisi']);
        $this->form_validation->set_rules('central_lock', 'central_lock', 'required', ['required' => 'Central Lock Wajib Diisi']);
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Mobil';
        $data['detail'] = $this->rent_model->ambil_id($id);

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar');
        $this->load->view('admin/detail_mobil', $data);
        $this->load->view('temp_admin/footer');
    }

    public function hapus($id)
    {
        $where = array('id_mobil' => $id);

        $this->rent_model->hapus($where, 'mobil');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mobil Berhasil DiHapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/data_mobil');
    }
}

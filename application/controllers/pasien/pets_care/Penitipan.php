<?php

class Penitipan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_status();
        $this->CI = &get_instance();
        if ($this->CI->router->fetch_class() != "login") {
            // session check logic here...change this accordingly
            if ($this->CI->session->userdata['level'] == 'dokter') {
                redirect('dokter/dashboard');
            } elseif ($this->CI->session->userdata['level'] == 'admin') {
                redirect('admin/dashboard');
            }
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Sistem informasi klinik pelayanan hewan',
            'halaman' => 'Data | Penitipan',
            'icon' => 'fas fa-door-open',
            'user' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
            'penitipan' => $this->Penitipan_model->getAllMyPenitipan()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_pasien');
        $this->load->view('templates/sidebar_pasien');
        $this->load->view('pasien/pets_care/penitipan/index');
        $this->load->view('templates/footer_pasien');
    }

    public function create()
    {
        $data = [
            'title' => 'Sistem informasi klinik pelayanan hewan',
            'user' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
            'halaman' => 'Data | Tambah Penitipan',
            'icon' => 'fas fa-door-open',
            'users' => $this->db->get_where('tbl_users', ['level' => 'pasien'])->result_array(),
            'pakets' => $this->db->get('tbl_paket_penitpan')->result_array(),
        ];
        $data['record'] =  $this->Paket_penitipan_model->tampil_data();
        $this->form_validation->set_rules('id_users_pet', 'pasien', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar_pasien');
            $this->load->view('templates/sidebar_pasien');
            $this->load->view('pasien/pets_care/penitipan/create');
            $this->load->view('templates/footer_pasien');
        } else {
            $data = [
                'id_users_pet' => $this->input->post('id_users_pet'),
                'nama_hewan_penitipan' => $this->input->post('nama_hewan_penitipan'),
                'jumlah_hari_penitipan' => $this->input->post('jumlah_hari_penitipan'),
                'id_paket_penitipan' => $this->input->post('id_paket_penitipan'),
                'keterangan_tambahan_penitipan' => $this->input->post('keterangan_tambahan_penitipan'),
                'total_harga_penitipan' => $this->input->post('total_harga_penitipan'),
                'time_create_boking_penitipan' => date('Y-m-d H:i:s'),
            ];

            $this->db->insert('tbl_boking_penitipan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success">Sukses, Data Berhasil Ditambahkan.</div>');
            redirect('pasien/pets_care/penitipan');
        }
    }
    public function cari()
    {
        $id_paket_penitipan = $_GET['id_paket_penitipan'];
        $cari = $this->Paket_penitipan_model->cari($id_paket_penitipan)->result();
        echo json_encode($cari);
    }
}

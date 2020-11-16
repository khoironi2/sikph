<?php

class Profile extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sistem informasi klinik pelayanan hewan',
            'halaman' => 'Data | Profile',
            'user' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('alamat_users', 'alamat', 'required');
        $this->form_validation->set_rules('telepon_users', 'telepon', 'required');
        $this->form_validation->set_rules('facebook_users', 'facebook', 'required');
        $this->form_validation->set_rules('youtube_users', 'youtube', 'required');
        $this->form_validation->set_rules('twitter_users', 'twitter', 'required');
        $this->form_validation->set_rules('instagram_users', 'instagram', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/profile/index');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'alamat_users' => $this->input->post('alamat_users'),
                'telepon_users' => $this->input->post('telepon_users'),
                'facebook_users' => $this->input->post('facebook_users'),
                'youtube_users' => $this->input->post('youtube_users'),
                'twitter_users' => $this->input->post('twitter_users'),
                'instagram_users' => $this->input->post('instagram_users'),
            ];

            $this->db->where('email', $this->input->post['email']);
            $this->db->update('tbl_users', $data);

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses, Data user berhasil diubah !</div>');
            redirect('admin/profile');
        }
    }
}

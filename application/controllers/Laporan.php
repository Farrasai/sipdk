<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Menu Surat';
		$data['user'] = $this->db->get_where('user', ['email' => 
						$this->session->userdata('email')])->row_array();
		
		$data['menu'] = $this->db->get('user_menu')->result_array();
		$data['anggota'] = $this->db->get('user')->result_array();



		$this->form_validation->set_rules('menu','Menu','required');

		if($this->form_validation->run() == false ) {
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/sidebar_kanan', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('laporan/index', $data);
		$this->load->view('templates/footer');	
	}else {
		$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"><strong>Menu berhasil ditambahkan!</strong></div>');
			redirect('menu');
		}

	}

}

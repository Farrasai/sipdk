<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();

		date_default_timezone_set("ASIA/JAKARTA");
	}

	public function index()
	{


		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();

		$this->load->model('Model_admin','admin');

		$data['hl'] = $this->admin->hitungLaporan();
		$data['ha'] = $this->admin->hitungAnggota();
		$data['hd'] = $this->admin->hitungData();
		$data['hp'] = $this->admin->hitungPengumuman();
		
		$data['anggota'] = $this->db->get('user')->result_array();

		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/sidebar_kanan', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
		
	
	}

	public function role()
	{


		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();


		$data['anggota'] = $this->db->get('user')->result_array();

		
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/sidebar_kanan', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('templates/footer');
		
	
	}

	public function roleAccess($role_id)
	{


		$data['title'] = 'Role Access';
		$data['user'] = $this->db->get_where('user', ['email' => 
	$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/sidebar_kanan', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('templates/footer');
		
	
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if($result->num_rows() <1) {
			$this->db->insert('user_access_menu', $data);
		}else {
			$this->db->delete('user_access_menu',$data);
		}
$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				<strong>Akses Diubah!</strong>
				</div>');
	}



	public function Anggota()

	{
		$data['title'] = 'Anggota';
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['anggota'] = $this->db->get('user')->result_array();		
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/sidebar_kanan');
		$this->load->view('templates/topbar');
		$this->load->view('admin/anggota');
		$this->load->view('templates/footer');
	}


	public function Notice()
	{
		$data['title'] = 'Pengumuman';
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['anggota'] = $this->db->get('user')->result_array();		
		$data['notice'] = $this->db->get('pengumuman')->result_array();

		//validasi
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('perihal','Perihal','required');


	if ($this->form_validation->run() == false) {
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/sidebar_kanan');
		$this->load->view('templates/topbar');
		$this->load->view('admin/notice');
		$this->load->view('templates/footer');

		}else {
			$data = [

					'tanggal' =>$this->input->post('tanggal'),
					'perihal' =>$this->input->post('perihal')
			];

			$this->db->update('pengumuman', $data);


			$this->session->set_flashdata('message','<div class="alert alert-success col-sm-16 col-md-8" role="alert"><strong>Pengumuman berhasil diterbitkan!</strong></div>');
			redirect('admin/notice');
		}
	}

}
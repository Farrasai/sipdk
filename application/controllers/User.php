<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Halaman Profil';
		$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();

		$data['umum'] = $this->db->get('pengumuman')->result_array();
		$data['anggota'] = $this->db->get('user')->result_array();

		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/sidebar_kanan', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
		
	
	}

	public function edit()
	{


		$data['title'] = 'Edit Profil';
		$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();



		$data['anggota'] = $this->db->get('user')->result_array();




		$this->form_validation->set_rules('name', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/sidebar_kanan', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/edit', $data);
		$this->load->view('templates/footer');
		} else {





			//cek gambar diupload
			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}else {
					echo $this->upload->display_errors();
				}
			}


			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$jabatan = $this->input->post('jabatan');
			$bidang = $this->input->post('bidang');

	$data = array(
      	'name' => $this->input->post('name', true),
        'jabatan' => $this->input->post('jabatan', true),
        'bidang' => $this->input->post('bidang', true)
        	);

			//$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user', $data);

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				<strong>Selamat!</strong> Akun berhasil diubah.
				</div>');
			redirect('user');
		}
	}

	public function changePassword()
	{
		$data['title'] = 'Ganti Password';
		$data['user'] = $this->db->get_where('user', ['email' => 
						$this->session->userdata('email')])->row_array();



		$data['anggota'] = $this->db->get('user')->result_array();


		
				
	$this->form_validation->set_rules('current_password', 'Password Lama', 'required|trim');
	$this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[5]|matches[new_password2]');
	$this->form_validation->set_rules('new_password2', 'Ulangi Password Baru', 'required|trim|min_length[5]|matches[new_password1]');			

	if($this->form_validation->run() == false) {
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/sidebar_kanan', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/changepassword', $data);
		$this->load->view('templates/footer');
		
		} else {
			$current_password = $this->input->post('current_password');
			$new_password 	  = $this->input->post('new_password1');

			if(!password_verify($current_password, $data['user']['password'])){ 

				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  				<strong>Password Lama Salah!</strong>
				</div>');
				redirect('user/changepassword');

			} else {
				if($current_password == $new_password) {

				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  				<strong>Password Lama tidak boleh sama dengan password baru!</strong>
				</div>');
				redirect('user/changepassword');
				
			} else {
						// password sudah ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				<strong>Password Sukses Ganti!</strong>
				</div>');
				redirect('user/changepassword');	

				}
			}
		}
	
	}
}
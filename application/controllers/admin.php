<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index() {
		$this->load->view('admin/index');
	}
	public function login() {
		$this->load->view('login');
	}
	public function loginAction() {
		redirect(base_url("admin/index"));
	}
	public function customer() {
		$data = array(

			'title' 	=> 'Customer',
			'data_customer'	=> $this->model_customer->get_all(),

		);
		$this->load->view('admin/customer', $data);
	}
	public function customerTambah(){

		$data = array(

			'judul' 	=> 'Tambah Data Customer'

		);
		$this->load->view('admin/customerForm', $data);	
	}
	public function customerSimpanData(){
	$data = array(

			'nama' 			=> $this->input->post("nama"),
			'email' 		=> $this->input->post("email"),
			'no_telepon' 	=> $this->input->post("no_telepon"),
			'instagram' 	=> $this->input->post("instagram"),
			'tanggal_lahir' => $this->input->post("tanggal_lahir"),
			'pekerjaan' 	=> $this->input->post("pekerjaan"),
			'instansi' 		=> $this->input->post("instansi"),
		);

		$this->model_customer->simpan($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');

		//redirect
		redirect('admin/customer');	
	}
	public function customerEdit(){

		$id = $this->uri->segment(3);

		$data = array(

			'judul' 		=> 'Edit Data Customer',
			'data_customer' => $this->model_customer->edit($id)

		);

		$this->load->view('admin/customerEdit', $data);	
	}
	public function customerUpdateData(){

		$id['id'] = $this->input->post("id");

		$data = array(

			'nama' 			=> $this->input->post("nama"),
			'email' 		=> $this->input->post("email"),
			'no_telepon' 	=> $this->input->post("no_telepon"),
			'instagram' 	=> $this->input->post("instagram"),
			'tanggal_lahir' => $this->input->post("tanggal_lahir"),
			'pekerjaan' 	=> $this->input->post("pekerjaan"),
			'instansi' 		=> $this->input->post("instansi"),
		);

		$this->model_customer->update($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		//redirect
		redirect('admin/customer');	
	}
	public function customerHapus(){
		$id['id'] = $this->uri->segment(3);
		
		$this->model_customer->hapus($id);

		//redirect
		redirect('admin/customer');	
	}
	public function company() {
		$this->load->view('admin/company');
	}
	public function companyTambah(){
		$this->load->view('admin/companyForm');	
	}
	public function library() {
		$this->load->view('admin/library');
	}
	public function libraryTambah(){
		$this->load->view('admin/libraryForm');	
	}
	public function product() {
		$this->load->view('admin/product');
	}
	public function productTambah(){
		$this->load->view('admin/productForm');	
	}
	public function post(){
		$this->load->view('admin/posts');	
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	 public function __construct()
		{
      parent::__construct();


			// if($this->session->userdata('rol')){
			//   redirect(base_url());
			// }
		}

	public function index()
	{
													
		$idUser	= $this->session->userdata('idUser');												
		$user = $this->consultas->getUsers($idUser);
		$dataSidebar['nUser'] = $user;
		$data['user'] = $user;

		$this->load->view('pages/sidebar',$dataSidebar);
		$this->load->view('pages/profile',$data);
        

    }
	public function editImage()
	{

		$idUser	= $this->session->userdata('idUser');		
		
		$extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

		$image1 = $_FILES['avatar']['name'];

		$config['upload_path'] =  'assets/img/avatars/';
		$config['file_name'] = $image1;
		$config['allowed_types'] ='*';

		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		$this->upload->do_upload('avatar');


		$datos = array(
			'name_user' => $this->input->post('name_user'),
			'email_user' => $this->input->post('email_user'),
			'password_user' => $this->input->post('password_user'),
			'img_user' => $image1
		);

		$where = array(
			'id_user' => $idUser
		);

		$this->insertar->setUser($datos,$where);
		
		redirect(base_url('profile'));

    }

	}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$idRol	= $this->session->userdata('rol');		
		$nameUser	= $this->session->userdata('nameUser');		
		$user = $this->consultas->getUsers($idUser);

		if (!$idUser) {

			$data['error'] = "";
			$this->load->view('login/login', $data);

		}elseif($idUser == "1"){
			$dataSidebar['nameUser'] = $nameUser;

			$dataSidebar['nUser'] = $user;
			$data['user'] = $user;
			$data['teachers']=$this->consultas->getTeachers();
			$data['names']=$this->consultas->getNames();
			$this->load->view('pages/sidebar',$dataSidebar);
			$this->load->view('pages/index', $data);

		}else{
			$dataSidebar['nameUser'] = $nameUser;
			$data['user'] = $user;
			$data['teachers']=$this->consultas->getTeachersI($idUser);
			$data['names']=$this->consultas->getNames();
			$this->load->view('pages/sidebar',$dataSidebar);
			$this->load->view('pages/index', $data);

		}	

	}

	public function addteacher(){

		$idUser	= $this->session->userdata('idUser');												


		$datos = array(
			'name_teacher' => $this->input->post('name_teacher'),
			'dni_teacher' => $this->input->post('dni_teacher'),
			'email_teacher' => $this->input->post('email_teacher'),
			'ruc_teacher' => $this->input->post('ruc_teacher'),
			'cp_teacher' => $this->input->post('cp_teacher'),
			'direction_teacher' => $this->input->post('direction_teacher'),
			'user' => $idUser
		);

		$this->insertar->newTeacher($datos);
		echo "<script>
		alert('Guardado Correctamente');
		location.href = 'https://sysweb.lavid.life/';
		  </script>";
	}

	public function deleteteacher(){

		$teacher = $this->input->post('delete_id');
		$this->delete->delTeacher($teacher);
		$this->delete->delLTeacher($teacher);

		echo "<script>
		alert('Eliminado Correctamente');
		location.href = 'https://sysweb.lavid.life/';
		  </script>";
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}

}

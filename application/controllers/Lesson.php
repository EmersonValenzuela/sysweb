<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesson extends CI_Controller {

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

		$idteacher = $_GET['id'];
		$idcourse = $_GET['id_course'];
		$idUser	= $this->session->userdata('idUser');												
		$user = $this->consultas->getUsers($idUser);
		$dataSidebar['nUser'] = $user;




		$data['teacher']=$this->consultas->getTeachers($idteacher);
		$data['curso']=$this->consultas->getCurso($idcourse);

		$data['names']=$this->consultas->getNames();
		$this->load->view('pages/sidebar',$dataSidebar);
		$this->load->view('pages/lesson', $data);
	}

	public function edit(){

		$id_course = $this->input->post('id');
		$id_teacher = $this->input->post('id_teacher');
		$name_course = $this->input->post('title');
		$carrera_course = $this->input->post('race_teacher');
		$ciclo_course = $this->input->post('section_teacher');
		$first = $this->input->post('first');
		$second = $this->input->post('second');
		$third = $this->input->post('third');
		$four = $this->input->post('four');
		$five = $this->input->post('five');



		if($first == "1"){
			$first_lesson = "1";
		}else{
			$first_lesson = "0";
		}

		if($second == "1"){
			$second_lesson = "1";
		}else{
			$second_lesson = "0";
		}

		if($third == "1"){
			$third_lesson = "1";
		}else{
			$third_lesson = "0";
		}

		if($four == "1"){
			$four_lesson = "1";
		}else{
			$four_lesson = "0";
		}
		if($five == "1"){
			$five_lesson = "1";
		}else{
			$five_lesson = "0";
		}

		$datos = array(
			'name_course'=> $name_course,
			'carrera_course'=> $carrera_course,
			'ciclo_course'=> $ciclo_course,
			'first_lesson'=> $first_lesson,
			'second_lesson'=> $second_lesson,
			'third_lesson'=> $third_lesson,
			'four_lesson'=> $four_lesson,
			'five_lesson'=> $five_lesson

		);

		$where = array(
			'id_course' => $id_course
		);

		$this->insertar->setCourses($datos,$where);

		echo "<script>
		alert('Actualizado Correctamente');
		location.href = 'https://sysweb.lavid.life/lesson?id=".$id_teacher."&id_course=".$id_course."';
		  </script>";

	}

}

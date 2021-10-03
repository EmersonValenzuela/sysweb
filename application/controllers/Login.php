<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 public function __construct()
		{
            parent::__construct();
		}

	public function index()
	{

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $isUser = $this->consultas->isUser($email,$password);

        if ($isUser=="1") {

            $idUser = $this->consultas->findIdUser( $email,$password);
            $data = array(
                'idUser' => $idUser->id_user,
                'rol' => $idUser->rol_user,
                'nameUser' => $idUser->name_user
                         );
              $this->session->set_userdata($data);
              redirect(base_url());
        }else{

            $data['error'] = $isUser;
			$this->load->view('login/login', $data);
        }

    }

	}


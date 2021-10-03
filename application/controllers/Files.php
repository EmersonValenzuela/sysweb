<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {
	
	 public function __construct()
		{
      parent::__construct();


			// if($this->session->userdata('rol')){
			//   redirect(base_url());
			// }
		}

	public function index()
	{
    $data = array();
      $filesCount = count($_FILES['userfiles']['name']);
    for ($i=0; $i < $filesCounts ; $i++) {
      echo $_FILES['userFiles']['name'][$i];
    }

	}
}

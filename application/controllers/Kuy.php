<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuy extends CI_Controller {

public function index()
	{
		$this->load->view('Otp');
    }
public function nong()
	{
		$this->load->view('Face');
	}
}

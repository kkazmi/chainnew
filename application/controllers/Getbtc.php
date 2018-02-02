<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');



include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';


class Getbtc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session','Rpc');
		$this->load->helper('utility_helper');
		$this->load->model('Auth_model');
        $this->load->helper('form');
        if($this->session->userdata('email')==false)
        {
            redirect(base_url().'logout');
        }
	}
	
	public function index()
	{
	     $this->load->view('getbtc'); 
    }
   
}
?>

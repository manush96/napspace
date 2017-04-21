<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
        $this->load->library('session');
    }
    public function index()
    {
    	$this->load->view('common/header');
        $this->load->view('common/index');
        $this->load->view('common/footer');
    }
    public function second_page()
    {
                $this->load->view('common/header');
        $this->load->view('common/second');
    }
}
<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        $data['judul'] ="Pengertian Kesehatan Mental";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    
    }
    public function about(){
        $data['judul'] ="Pengertian Kesehatan Mental";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    
    }
    public function data(){
        $data['judul'] ="Pengertian Kesehatan Mental";
        $this->load->view('v_header',$data);
        $this->load->view('v_data',$data);
        $this->load->view('v_footer',$data);
    
    }
}
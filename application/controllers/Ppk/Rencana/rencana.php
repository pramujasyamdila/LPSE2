<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rencana extends CI_Controller
{
   public function index()
   {

      $this->load->view('template/header');

      $this->load->view('template/navbar');

      $this->load->view('lpse/ppk/rencana/rencana');

      $this->load->view('template/footer');
   }
}

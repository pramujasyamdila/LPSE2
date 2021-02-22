<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lpse extends CI_Controller
{
   public function index()
   {
      return $this->load->view('lpse/dashboard');
   }
}

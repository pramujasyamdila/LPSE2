<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_paket extends CI_Controller
{
   public function index()
   {

      $this->load->view('template/header');

      $this->load->view('template/navbar');

      $this->load->view('lpse/ppk/daftar_paket/daftar_paket');

      $this->load->view('template/footer');
   }
}

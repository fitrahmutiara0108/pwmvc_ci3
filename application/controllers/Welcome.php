<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('webprofile/layout');
	}

	public function hometown()
	{
		$this->load->view('webprofile/hometown');
	}

	public function food()
	{
		$this->load->view('webprofile/food');
	}

	public function profile()
	{
		$this->load->view('webprofile/profile');
	}

	public function tourist()
	{
		$this->load->view('webprofile/tourist');
	}

	public function home($a)
	{
		echo $a;
	}

	public function notFound()
	{
		echo "Halaman Tidak Ditemukan";
	}
}

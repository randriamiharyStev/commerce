<?php namespace App\Controllers;
use App\Controllers\BaseController;

class admin extends BaseController
{
	protected $helpers = ["form"];

	public function index()
	{
		$this->afficher();
	}
	public function afficher()
	{
		$data['title'] = "eCommerce";
		echo view('admin/templates_admin/header', $data);
		echo view('admin/dashboard', $data);
		echo view('admin/templates_admin/footer', $data);
	}
	public function profile()
	{
		$data['title'] = "eCommerce";
		echo view('admin/templates_admin/header', $data);
		echo view('admin/profile', $data);
		echo view('admin/templates_admin/footer', $data);
	}

	public function basic_table()
	{
		$data['title'] = "eCommerce";
		echo view('admin/templates_admin/header', $data);
		echo view('admin/basic-table', $data);
		echo view('admin/templates_admin/footer', $data);
	}
	public function icon()
	{
		$data['title'] = "eCommerce";
		echo view('admin/templates_admin/header', $data);
		echo view('admin/icon', $data);
		echo view('admin/templates_admin/footer', $data);
	}
	public function google_map()
	{
		$data['title'] = "eCommerce";
		echo view('admin/templates_admin/header', $data);
		echo view('admin/map-google', $data);
		echo view('admin/templates_admin/footer', $data);
	}
	public function blank()
	{
		$data['title'] = "eCommerce";
		echo view('admin/templates_admin/header', $data);
		echo view('admin/blank', $data);
		echo view('admin/templates_admin/footer', $data);
	}
}

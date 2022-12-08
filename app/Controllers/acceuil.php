<?php namespace App\Controllers;
use App\Controllers\BaseController;

class acceuil extends BaseController
{
	public function index()
	{
		$this->afficherAcceuil();
	}
	public function afficherAcceuil()
	{
		$data['title'] = "eCommerce";
		echo view('Template-parts/header', $data);
		echo view('pages/acceuil', $data);
		echo view('Template-parts/footer', $data);
	}
}

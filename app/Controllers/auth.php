<?php namespace App\Controllers;
use App\Controllers\BaseController;

class auth extends BaseController
{
	public function index()
	{
		$this->afficher();
	}
	public function afficher()
	{
		$data['title'] = "eCommerce";
		echo view('Template-parts/header', $data);
		echo view('pages/produit', $data);
		echo view('Template-parts/footer', $data);
	}
}

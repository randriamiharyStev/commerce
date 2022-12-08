<?php namespace App\Controllers;
use App\Controllers\BaseController;

class panier extends BaseController
{
	public function banier()
	{
		$this->afficherPanier();
	}
	public function afficherPanier()
	{
		$data['title'] = "eCommerce";
		echo view('Template-parts/header', $data);
		echo view('pages/panier', $data);
		echo view('Template-parts/footer', $data);
	}
}

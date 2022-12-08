<?php namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\UserModel;

class Home extends BaseController
{
	// protected $helpers = ["form"];
	protected $helpers = ['url', 'form'];

	public function __construct()
	{
		helper(['form', 'url']);
	}

	public function index()
	{
		$this->afficher();
	}
	public function afficher()
	{
		$data['title'] = "eCommerce";
		echo view('Template-parts/header', $data);
		echo view('pages/home', $data);
		echo view('Template-parts/footer', $data);
	}
	public function register()
	{
		$data['title'] = "eCommerce";
		echo view('Template-parts/header', $data);
		echo view('pages/register', $data);
		echo view('Template-parts/footer', $data);
	}

	public function insertDonne()
	{
		$model = model(UserModel::class);
		$rules = [
			'name' => 'required',
			'pseudo' => 'required|min_length[4]|max_length[12]',
			'email' => 'required|valid_email|is_unique[users.email]',
			// 'password' => 'required|min_lenght[4]|max_lenght[12]',
			// 'cpassword' => 'required|min_lenght[4]|max_lenght[12]|matches[password]'
			'password' => 'required',
			'cpassword' => 'required'
			
		];

		if( $this->validate($rules)){
			$model->save([
				'name' => $this->request->getPost('name'),
				'pseudo' => $this->request->getPost('pseudo'),
				'email' => $this->request->getPost('email'),
				'password' => sha1($this->request->getPost('password'))
			]);
			return redirect()->to('/Commerce/acceuil');
		}
		else{
			return view("pages/register", ['validation'=>$this->validator]);
		}
	}

	public function check(){

		// echo "check login............";
		// $model = model(UserModel::class);

		$session = \Config\Services::session();
		
		if (isset($_SESSION['login1'])) {
				$data = $model->select("users",[],[
				$pseudo   =>$this->request->getPost('pseudo'),
				$password =>$this->request->getPost('password')
				]) ;
		
			$session->set($data);
				return redirect()->to('/aceuil');
			
		}

		// if(isset($_POST['login1'])){

		// 	$data = $model->select("users",[],[
		// 		$pseudo   =>$this->request->getPost('pseudo'),
		// 		$password =>$this->request->getPost('password')
		// 		]) ;

		// 		$_SESSION['users'] == $pseudo;
		// 		return redirect()->to('/acceuil');
		// }
		// else{
		// 	return redirect()->to('/aceuil');
		// }
	}
}

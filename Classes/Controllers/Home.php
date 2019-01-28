<?php 


/**
 * Classe Controler
 */
class Home extends Controller
{
	
	public function index()
	{
		$this->view->title = 'Olá Mundo';
		$this->view->message = "Hello World";
		$this->view->render('Views/home/index.phtml');
	}

	//Apenas um Teste usando o Model User.
	public function useradd(){

		$user = new User();
		$user->name = 'Mvc Test';

		$user->insert($user);

		$this->view->title = 'Usuario inserido';
		$this->view->message = "Usuario inserido com sucesso";
		$this->view->user = $user;
		$this->view->render('Views/home/index.phtml');
	}

}
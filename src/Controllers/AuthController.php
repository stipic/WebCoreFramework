<?php
namespace App\Controllers;
use \Ergy\Slim\Annotations\Controller as BaseController;

class AuthController extends BaseController
{
	/**
	 * @Route("/login", methods={"GET","POST"}, name="loginAction")
	 */
	public function loginAction() 
	{
		return $this->_twig->render($this->response, 'base.html.twig');
	}

	/**
	 * @Route("/register", methods={"GET","POST"}, name="registerAction")
	 */
	public function registerAction() 
	{
		return $this->_twig->render($this->response, 'base.html.twig');
	}

	/**
	 * @Route("/reset-password", methods={"GET","POST"}, name="resetPasswordAction")
	 */
	public function resetPasswordAction() 
	{
		return $this->_twig->render($this->response, 'base.html.twig');
	}
}
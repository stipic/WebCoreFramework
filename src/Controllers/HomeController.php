<?php
namespace App\Controllers;
use \Ergy\Slim\Annotations\Controller as BaseController;

class HomeController extends BaseController
{
	/**
	 * @Route("/", methods={"GET","POST"}, name="indexAction")
	 */
	public function indexAction() 
	{
		return $this->_twig->render($this->response, 'base.html.twig');
	}
}
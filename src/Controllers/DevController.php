<?php
namespace App\Controllers;
use \Ergy\Slim\Annotations\Controller as BaseController;

class DevController extends BaseController
{
	/**
	 * @Route("/t/{template_name}", methods={"GET","POST"}, name="previewAction")
	 */
	public function previewAction($template_name) 
	{
		$location = APP . '/' . APP_VIEW_DIRECTORY;
        $recursiveIterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($location));
        foreach($recursiveIterator as $path => $val) 
        {
            if($val->getFilename() === '.' || $val->getFilename() === '..') continue;
            if($val->getFilename() === $template_name)
            {
				$destination = str_replace($location, '', $path);
                $this->_twig->render($this->response, $destination);
            }
		}
		
		return 'Not found!';
	}
	
	/**
	 * @Route("/dev/sitemap", methods={"GET","POST"}, name="sitemapAction")
	 */
	public function sitemapAction() 
	{
		$template = '';
        $location = APP . '/' . APP_VIEW_DIRECTORY;
        $recursiveIterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($location));
        foreach($recursiveIterator as $path => $val) 
        {
            if($val->getFilename() === '.' || $val->getFilename() === '..') continue;
            $template .= '<a href="/t/' . $val->getFilename() . '">' . $val->getFilename() . '</a><br />';
		}
		
		die($template);
    }
}
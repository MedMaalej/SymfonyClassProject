<?php
namespace Formation\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    /**
     * @Route("/test/{name}", name="formindex")
     * @Template()
     */  //c l'annotation
    public function indexAction($name)
    {
        return array('name' => $name);
		//return new Response('<html><body>Bonjour '.$name. '</body></html>');
    }
}

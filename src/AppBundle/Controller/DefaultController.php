<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/override-config", name="override-config")
     */
    public function overrideConfigAction()
    {
        $this->get('js_config')->setKey('calculatorVersion', 4);

        return $this->render('default/index.html.twig');
    }

    public function jsConfigAction()
    {
        return $this->render(':default:_js_config.html.twig', $this->get('js_config')->getAll());
    }
}

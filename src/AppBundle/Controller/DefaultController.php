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

    public function jsConfigAction()
    {
        $config = [
            'randomizerVersion' => 2,
            'calculatorVersion' => 3
        ];

        return $this->render(':default:_js_config.html.twig', $config);
    }
}

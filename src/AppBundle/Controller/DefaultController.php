<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/", name="homepage")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($name)
    {
        return $this->render('AppBundle:Default:index.html.twig', array('name' => $name));
    }
}

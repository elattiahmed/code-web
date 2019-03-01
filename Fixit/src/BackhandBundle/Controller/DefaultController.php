<?php

namespace BackhandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackhandBundle:Default:index.html.twig');
    }
    public function servicesAction()
    {
        return $this->render('@Backhand/Default/service.html.twig');
    }
}

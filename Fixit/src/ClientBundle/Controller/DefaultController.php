<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClientBundle:Default:home.html.twig');
    }
    public function profilAction()
    {
        return $this->render('@Client/Default/profile.html.twig');
    }

}

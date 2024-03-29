<?php

namespace FixitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FixitBundle:Default:index.html.twig');
    }
    public function aboutusAction()
    {
        return $this->render('@Fixit/Default/aboutus.html.twig');
    }
    public function servicesAction()
    {
        return $this->render('@Fixit/Default/services.html.twig');
    }
    public function galleryAction()
    {
        return $this->render('@Fixit/Default/gallery.html.twig');
    }
    public function contactusAction()
    {
        return $this->render('@Fixit/Default/contactus.html.twig');
    }
}

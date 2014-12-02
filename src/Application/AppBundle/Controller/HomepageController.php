<?php

namespace Application\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        $this->get('twig')->addGlobal('isHomepage', true);
        return $this->render('AppBundle:Homepage:index.html.twig');
    }
}
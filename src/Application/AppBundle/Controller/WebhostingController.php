<?php

namespace Application\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebhostingController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Webhosting:index.html.twig', array('locale' => $this->get('translator')->trans('Im English version')));
    }
}

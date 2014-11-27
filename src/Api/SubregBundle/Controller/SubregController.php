<?php

namespace Api\SubregBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubregController extends Controller
{
    public function indexAction()
    {
        return $this->render('SubregBundle:Api:index.html.twig');
    }
}

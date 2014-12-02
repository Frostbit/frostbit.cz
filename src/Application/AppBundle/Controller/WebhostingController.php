<?php

namespace Application\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebhostingController extends Controller
{
    public function indexAction()
    {
        $pricelist = $this->getDoctrine()
            ->getRepository('AppBundle:WebhostingPricelist')
            ->findAll();

        return $this->render('AppBundle:Webhosting:index.html.twig', array('pricelist' => $pricelist));
    }

    public function saleAction($sale)
    {
    	return $this->render('AppBundle:Webhosting:sale.html.twig', array('sale' => $sale));
    }
}

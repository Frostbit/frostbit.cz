<?php

namespace Application\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebhostingController extends Controller
{
    public function indexAction()
    {
        if ($pricelist = $this->get('cache')->fetch('webhostingPricelist')) {
            $pricelist = unserialize($pricelist);
        } else {
            $pricelist = $this->getDoctrine()
                ->getRepository('AppBundle:WebhostingPricelist')
                ->findAll();
            $this->get('cache')->save('webhostingPricelist', serialize($pricelist));
        }

        return $this->render('AppBundle:Webhosting:index.html.twig', array('pricelist' => $pricelist));
    }

    public function saleAction($sale)
    {
    	return $this->render('AppBundle:Webhosting:sale.html.twig', array('sale' => $sale));
    }
}

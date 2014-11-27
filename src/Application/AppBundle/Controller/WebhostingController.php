<?php

namespace Application\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\AppBundle\Entity\DomainPricelist;

class WebhostingController extends Controller
{
    public function indexAction()
    {
    	$domain = $this->getDoctrine()
    		->getRepository('AppBundle:DomainPricelist')
    		->find(1);

    	if (!$domain) {
    		throw $this->createNotFoundException(
    			'No domain found for id '.$id
    		);
    	}

    	$count = 10;

        return $this->render('AppBundle:Webhosting:index.html.twig', array('domain' => $domain, 'count' => $count));
    }

    public function saleAction($sale)
    {
    	return $this->render('AppBundle:Webhosting:sale.html.twig', array('sale' => $sale));
    }
}

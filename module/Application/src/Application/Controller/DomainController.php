<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DomainController extends AbstractActionController
{
    protected $domainTable;

    public function getDomainTable()
    {
        if (!$this->domainTable) {
            $sm = $this->getServiceLocator();
            $this->domainTable = $sm->get('Application\Model\DomainTable');
        }
        return $this->domainTable;
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function pricelistAction()
    {
    	return new ViewModel(array(
    		'group' => $this->getEvent()->getRouteMatch()->getParam('group'),
            'domains' => $this->getDomainTable()->fetchAll(),
    	));
    }
}

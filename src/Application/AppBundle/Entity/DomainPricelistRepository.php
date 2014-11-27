<?php 

namespace Application\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class DomainPricelistRepository extends EntityRepository
{
	public function getCount()
	{
		return 10;
	}
}
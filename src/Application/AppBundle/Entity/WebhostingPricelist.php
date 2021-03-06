<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="webhosting_pricelist")
 */
class WebhostingPricelist 
{
	/**
	 * @ORM\Column(type="integer", scale=5)
     * @ORM\Id
	 */
	protected $space;

	/**
	 * @ORM\Column(type="integer", scale=10)
	 */
	protected $price;

	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $currency;

	/**
	 * @ORM\Column(type="integer", scale=1)
	 */
	protected $status;

    /**
     * Set space
     *
     * @param \integer $space
     * @return WebhostingPricelist
     */
    public function setSpace(\integer $space)
    {
        $this->space = $space;

        return $this;
    }

    /**
     * Get space
     *
     * @return \integer 
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * Set price
     *
     * @param \integer $price
     * @return WebhostingPricelist
     */
    public function setPrice(\integer $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return \integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return WebhostingPricelist
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set status
     *
     * @param \integer $status
     * @return WebhostingPricelist
     */
    public function setStatus(\integer $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}

<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DomainPricelist
 */
class DomainPricelist
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tld;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $reg_price;

    /**
     * @var string
     */
    private $renew_price;

    /**
     * @var string
     */
    private $transfer_price;

    /**
     * @var string
     */
    private $restore_price;

    /**
     * @var string
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tld
     *
     * @param string $tld
     * @return DomainPricelist
     */
    public function setTld($tld)
    {
        $this->tld = $tld;

        return $this;
    }

    /**
     * Get tld
     *
     * @return string 
     */
    public function getTld()
    {
        return $this->tld;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return DomainPricelist
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set reg_price
     *
     * @param string $regPrice
     * @return DomainPricelist
     */
    public function setRegPrice($regPrice)
    {
        $this->reg_price = $regPrice;

        return $this;
    }

    /**
     * Get reg_price
     *
     * @return string 
     */
    public function getRegPrice()
    {
        return $this->reg_price;
    }

    /**
     * Set renew_price
     *
     * @param string $renewPrice
     * @return DomainPricelist
     */
    public function setRenewPrice($renewPrice)
    {
        $this->renew_price = $renewPrice;

        return $this;
    }

    /**
     * Get renew_price
     *
     * @return string 
     */
    public function getRenewPrice()
    {
        return $this->renew_price;
    }

    /**
     * Set transfer_price
     *
     * @param string $transferPrice
     * @return DomainPricelist
     */
    public function setTransferPrice($transferPrice)
    {
        $this->transfer_price = $transferPrice;

        return $this;
    }

    /**
     * Get transfer_price
     *
     * @return string 
     */
    public function getTransferPrice()
    {
        return $this->transfer_price;
    }

    /**
     * Set restore_price
     *
     * @param string $restorePrice
     * @return DomainPricelist
     */
    public function setRestorePrice($restorePrice)
    {
        $this->restore_price = $restorePrice;

        return $this;
    }

    /**
     * Get restore_price
     *
     * @return string 
     */
    public function getRestorePrice()
    {
        return $this->restore_price;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return DomainPricelist
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}

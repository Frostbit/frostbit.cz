<?php

namespace Application\Model;

class Domain 
{
	public $id;
	public $tld;
	public $description;
	public $reg_price;
	public $mtn_price;
	public $status;

	public function exchangeArray($data)
	{
		$this->id = (isset($data['id'])) ? $data['id'] : null;
		$this->tld = (isset($data['tld'])) ? $data['tld'] : null;
		$this->description = (isset($data['description'])) ? $data['description'] : null;
		$this->reg_price = (isset($data['reg_price'])) ? $data['reg_price'] : null;
		$this->mtn_price = (isset($data['mtn_price'])) ? $data['mtn_price'] : null;
		$this->status = (isset($data['status'])) ? $data['status'] : null;
	}
}
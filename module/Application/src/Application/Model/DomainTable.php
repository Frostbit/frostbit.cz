<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class DomainTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getDomain($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function saveDomain(Domain $domain)
    {
        $data = array(
            'tld' => $domain->tld,
            'description'  => $domain->description,
            'reg_price'  => $domain->reg_price,
            'mtn_price'  => $domain->mtn_price,
            'status'  => $domain->status,
        );

        $id = (int)$domain->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getDomain($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Form id does not exist');
            }
        }
    }

    public function deleteDomain($id)
    {
        $this->tableGateway->delete(array('id' => $id));
    }
}
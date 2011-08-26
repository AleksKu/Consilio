<?php

namespace Aristos\PlazaBundle\Document;


use Doctrine\ODM\MongoDB\DocumentRepository;

class MaterialRepository extends DocumentRepository
{
    public function findAllOrderedByName()
    {
        return $this->createQueryBuilder()
            ->sort('name', 'ASC')
            ->getQuery()
            ->execute();
    }
}
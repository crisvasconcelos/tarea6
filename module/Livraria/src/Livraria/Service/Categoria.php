<?php

namespace Livraria\Service;

use Doctrine\ORM\EntityManager;

class Categoria {

    /**
     * @var EntityManager
     */
    protected $em;
    protected $entity;

    public function __construct(EntityManager $em) {
        $this->em = $em;
        $this->entity = "Livraria\Entity\Categoria";
    }

    public function insert(array $data) {
        $entity = new $this->entity($data);

        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }

}

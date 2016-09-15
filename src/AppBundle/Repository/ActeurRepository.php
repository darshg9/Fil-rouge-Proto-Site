<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ActeurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ActeurRepository extends EntityRepository
{

    public function findSerie($id)
    {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT r FROM AppBundle:Role WHERE r.serie.id =:id'
                        )->setParameter('id', $id)
                        ->getResult();
    }

}

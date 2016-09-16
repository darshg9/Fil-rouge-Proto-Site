<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SerieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SerieRepository extends EntityRepository
{

    public function findActeurs($id)
    {
        return $this->getEntityManager()->createQuery('SELECT a FROM AppBundle:Acteur a JOIN a.roles r JOIN r.serie s WHERE r.serie = :id')
                        ->setParameter('id', $id)
                        ->getResult();
    }

}

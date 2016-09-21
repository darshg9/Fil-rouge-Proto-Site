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
        return $this->getEntityManager()
                        ->createQuery('SELECT a FROM AppBundle:Acteur a JOIN a.roles r WHERE r.serie = :id')->setParameter('id', $id)
                        ->getResult();
    }

    public function findSeriesNotActive()
    {
        return $this->getEntityManager()
                        ->createQuery('SELECT s FROM AppBundle:Serie s WHERE s.valide = false')
                        ->getResult();
    }

    public function findSeriesActive()
    {
        return $this->getEntityManager()
                        ->createQuery('SELECT s FROM AppBundle:Serie s WHERE s.valide = true')
                        ->getResult();
    }

    public function findCritiques($id)
    {
        return $this->getEntityManager()
                        ->createQuery('SELECT c FROM AppBundle:Critique c WHERE c.serie = :id')
                        ->setParameter('id', $id)
                        ->getResult();
    }

}

<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UtilisateurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UtilisateurRepository extends EntityRepository
{

    public function getInfo($em, $id)
    {

        $query = $em->createQuery("SELECT u "
                        ."FROM AppBundle:Utilisateur u "
                        ."WHERE u.id = :id")
                ->setParameter("id", $id);

        $utilisateur = $query->getResult();

        return $utilisateur;
    }

}

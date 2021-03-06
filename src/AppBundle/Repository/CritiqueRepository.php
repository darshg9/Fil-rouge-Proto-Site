<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CritiqueRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CritiqueRepository extends EntityRepository
{

    public function getCritiquesByUser($em, $id)
    {

        $query = $em->createQuery("SELECT c "
                        ."FROM AppBundle:Critique c "
                        ."WHERE c.auteur = :id")
                ->setParameter("id", $id);

        $critiques = $query->getResult();

        return $critiques;
    }

    public function findCritiqueSignale()
    {
        return $this->getEntityManager()->createQuery('SELECT c FROM AppBundle:Critique c WHERE c.signale = true')
                        ->getResult();
    }

    public function getCritiquesByAbonnements($em, $id)
    {

        $query = $em->createQuery("SELECT u "
                        ."FROM AppBundle:Utilisateur u "
                        ."WHERE u.id = :id")
                ->setParameter("id", $id);

        $utilisateur = $query->getSingleResult();

        $critiques = [];

        foreach ($utilisateur->getAbonnements() as $abonnement)
        {

            $idSerie = $abonnement->getId();
            $query = $em->createQuery("SELECT c "
                            ."FROM AppBundle:Critique c "
                            ."WHERE c.serie = :id "
                            ."ORDER BY c.dateCritique DESC")
                    ->setParameter("id", $idSerie);

            $critiques[] = ["titre" => $abonnement->getTitre(), "critiques" => $query->getResult()];
        }

        return $critiques;
    }

}

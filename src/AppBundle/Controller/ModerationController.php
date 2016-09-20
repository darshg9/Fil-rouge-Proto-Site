<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Acteur;
use AppBundle\Entity\Serie;
use AppBundle\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModerationController extends Controller
{

    /**
     * @Route("/moderation", name="moderation")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $series_not_valide = $em->getRepository('AppBundle:Serie')->findSeriesNotActive();
        $acteurs_not_valide = $em->getRepository('AppBundle:Acteur')->findActeursNotActive();
        $utilisateurs = $em->getRepository('AppBundle:Utilisateur')->findAll();
        $utilisateurs_ban = $em->getRepository('AppBundle:Utilisateur')->findUtilisateurBan();
        $utilisateurs_role = $em->getRepository('AppBundle:Utilisateur')->findUtilisateurRole('ROLE_ADMIN');
        $critiques_signale = $em->getRepository('AppBundle:Critique')->findCritiqueSignale();

        return $this->render('moderation/index.html.twig', array(
                    'series' => $series_not_valide,
                    'acteurs' => $acteurs_not_valide,
                    'utilisateurs' => $utilisateurs,
                    'utilisateurs_ban' => $utilisateurs_ban,
                    'utilisateurs_role' => $utilisateurs_role,
                    'critiques_signale' => $critiques_signale,
        ));
    }

    /**
     * @Route("/serie/validation/{id}", name="serie_valide")
     */
    public function valideSerieAction(Serie $serie)
    {
        $em = $this->getDoctrine()->getManager();
        $serie->setValide(true);
        $em->persist($serie);
        $em->flush();
        return $this->redirectToRoute('moderation');
    }

    /**
     * @Route("/acteur/validation/{id}", name="acteur_valide")
     */
    public function valideActeurAction(Acteur $acteur)
    {
        $em = $this->getDoctrine()->getManager();
        $acteur->setValide(true);
        $em->persist($acteur);
        $em->flush();
        return $this->redirectToRoute('moderation');
    }

    /**
     * @Route("/bannir/{id}", name="bannir")
     */
    public function bannirAction(Utilisateur $utilisateur)
    {
        $em = $this->getDoctrine()->getManager();
        var_dump($utilisateur->isEnabled());
        if ($utilisateur->isEnabled())
        {
            $utilisateur->setEnabled(false);
        }
        else
        {
            $utilisateur->setEnabled(true);
        }
        $em->persist($utilisateur);
        $em->flush();
        return $this->redirectToRoute('moderation');
    }

}

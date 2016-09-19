<?php

namespace AppBundle\Controller;

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
        $utilisateurs_role = $em->getRepository('AppBundle:Utilisateur')->findUtilisateurRole('ROLE');
        $critiques_signale = $em->getRepository('AppBundle:Critique')->findCritiqueSignale();

        return $this->render('moderation/index.html.twig', array(
                    'series' => $series_not_valide,
                    'acteurs' => $acteurs_not_valide,
                    'utilisateur' => $utilisateurs,
                    'utilisateur_ban' => $utilisateurs_ban,
                    'utilisateur_role' => $utilisateurs_role,
                    'critiques_signale' => $critiques_signale,
        ));
    }

}
